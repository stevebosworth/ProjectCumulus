$(document).ready(function() {
    $('#add').dialog({autoOpen: false});

//Hide add meta div when a select is focused
    // $('select').focus( function(){
    //     $('#add').dialog("close");
    // });

//Cancel Adding Meta Categories
    $('#btn_cancel_meta').click(function(){
        $('#add').dialog("close");
        $('#meta_id').val('');
        $('#add_title').val('');
        $('#add_num').val('');
    });


//Set Book Drop Down
    $('#sel_law').change(function selectLaw(){
        var lawID = $(this).val();
        var dataString = 'law_id=' + lawID;
        $.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_book').html(html);
            }
        });
    });

//Set Title Drop Down
    $('#sel_book').change(function(){
		var bookID = $(this).val();
		var dataString = 'book_id=' + bookID;
		$.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                console.log(html);
                $('#sel_title').html(html);
            }
        });
    });

//Set Chapter Drop Down
    $('#sel_title').change(function(){
        var titleID = $(this).val();
        var dataString = 'title_id=' + titleID;
        $.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                console.log(html);
                $('#sel_ch').html(html);
            }
        });
    });

//Set Division Drop Down
    $('#sel_ch').change(function(){
        var chID = $(this).val();
        var dataString = 'ch_id=' + chID;
        $.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                console.log(html);
                $('#sel_div').html(html);
            }
        });
    });

//Set Sub-Division Drop Down
    $('#sel_div').change(function(){
        var divID = $(this).val();
        var dataString = 'div_id=' + divID;
        $.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                console.log(html);
                $('#sel_sub_div').html(html);
            }
        });
    });


//Add title Button
    $('#btn_add_title').click(function(){
        //get
        var id = $('#sel_book').val();
        var table = $('#sel_title').attr('data-table');
        var table = table.slice(0, -1);
        var tableVal = $('#sel_book option:selected').text();
        console.log (tableVal);
        console.log(table);
        console.log(id);
        //
        if(!isNaN(id)){
            $('#add').dialog("open");
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
           alert("You must select a Book first.");
        }
    })

//Add Chapter Button
    $('#btn_add_ch').click(function(){
        var id = $('#sel_title').val();
        var table = $('#sel_ch').attr('data-table');
        var table = table.slice(0, -1);
        var tableVal = $('#sel_title option:selected').text();
        console.log (tableVal);
        console.log(table);
        console.log(id);
        if(!isNaN(id)){
            $('#add').dialog("open");
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
            alert("You must select a Title first.");
        }
    })


//Add Division Button
    $('#btn_add_div').click(function(){
        var id = $('#sel_ch').val();
        var table = $('#sel_div').attr('data-table');
        var table = table.slice(0, -1);
        var tableVal = $('#sel_ch option:selected').text();
        console.log (tableVal);
        console.log(table);
        console.log(id);
        if(!isNaN(id)){
            $('#add').dialog("open");
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
           alert("You must select a Chapter first.");
        }
    })

//Sub-div add button
    $('#btn_add_sub_div').click(function(){
        var id = $('#sel_div').val();
        var table = $('#sel_sub_div').attr('data-table');
        var tableVal = $('#sel_div option:selected').text();
        console.log (tableVal);
        console.log(table);
        console.log(id);
        if(!isNaN(id)){
            $('#add').dialog("open");
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
           alert("You must select a Division first.");
        }
    });

//INSERT META USING AJAX
    $('#btn_ins_meta').click(function(){
        $.post('include/add-meta.inc.php', {
            id: $('#meta_id').val(),
            num: $('#add_num').val(),
            title: $('#add_title').val(),
            table: $('#meta_table').val()
             }, function(html) {
                console.log(html);
                $('.test').html(html);
                $('#add_title').val('');
                $('#add_num').val('');
            });
    });

//INSERT SECTION USING AJAX
    $('#btn_ins_sec').click(function(){
        //Create Blank value for database if no meta value is selected
        $('#frm_add_section  select option:first-of-type').each(function(){
            if(isNaN($(this).val())){
                $(this).val('');
                console.log($(this).val());
            }
        });
        //Create array of field values excluding default values.
        var section = $('#frm_add_section').not('[selected="selected"]').serialize();
        console.log(section);

        $.post('include/add-sec.inc.php', section, function(msg){
            $('.test').html(msg);
            $('#sec_num').val('');
            $('#sec_title').val('');
            $('#sec_text').val('');
            $('#enact_yr').val('');
            $('#enact_sec').val('');
            $('#enact_bill').val('');
        });
    });
});