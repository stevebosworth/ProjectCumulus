$(document).ready(function() {
    $('#add').hide();

    $('select').focus( function(){
        $('#add').hide();
    });

    $('#btn_cancel_meta').click(function(){
        $('#add').hide();
        $('#meta_id').val('');
        $('#add_title').val('');
        $('#add_num').val('');
    });

        // Takes the selected value of a dropdown, queries the DB and returns the values to the following <select>
    // $("select").change(function(){
    //     console.log(this);
    //     //table id variable
    //     var type = $(this).attr('name');
    //     var type = type.substring(4);
    //     console.log("type: " + type);
    //     //table to be queried
    //     var next_type = $(this).nextAll('select').attr('name');
    //     console.log("next_type: " + next_type);
    //     var next_type = next_type.substring(4);
    //     console.log("next_type: " + next_type);

    //     console.log($(this).nextAll('select').attr('data-table'));
    //     $.post('include/section-admin.inc.php', {
    //         id: $(this).val(),
    //         table: $(this).nextAll('select').attr('data-table'),
    //         id_type: type,
    //         next_type: next_type
    //          }, function(html) {
    //             console.log(html);
    //             $('select ~ select').html(html);
    //         });
    // });


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


    //Show Add Meta Button
    $('#btn_add_title').click(function(){
        //get
        var id = $('#sel_book').val();
        var table = $('#sel_title').attr('data-table');
        var table = table.slice(0, -1);
        var tableVal = $('#sel_book option:selected').text();
        console.log tableVal);
        console.log(table);
        console.log(id);
        //
        if(!isNaN(id)){
            $('#add').show();
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
           alert("You must select a Book first.");
        }
    })

    $('#btn_add_ch').click(function(){
        var id = $('#sel_title').val();
        var table = $('#sel_ch').attr('data-table');
        var table = table.slice(0, -1);
        var tableVal = $('#sel_title option:selected').text();
        console.log tableVal);
        console.log(table);
        console.log(id);
        if(!isNaN(id)){
            $('#add').show();
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
            alert("You must select a Title first.");
        }
    })

    $('#btn_add_div').click(function(){
        var id = $('#sel_ch').val();
        var table = $('#sel_div').attr('data-table');
        var table = table.slice(0, -1);
        var tableVal = $('#sel_ch option:selected').text();
        console.log tableVal);
        console.log(table);
        console.log(id);
        if(!isNaN(id)){
            $('#add').show();
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
           alert("You must select a Chapter first.");
        }
    })

    $('#btn_add_sub_div').click(function(){
        var id = $('#sel_title').val();
        var table = $('#sel_sub_div').attr('data-table');
        var tableVal = $('#sel_title option:selected').text();
        console.log tableVal);
        console.log(table);
        console.log(id);
        if(!isNaN(id)){
            $('#add').show();
            $('#add_meta_head').html("Add new " + table + " under '" + tableVal + "'");
            $('#meta_table').val(table);
            $('#meta_id').val(id);
            $('#add_title').val('');
            $('#add_num').val('');
        }else{
           alert("You must select a Division first.");
        }
    });

    //Insert new title using AJAX
    $('#btn_ins_meta').click(function(){
        $.post('include/add-meta.inc.php', {
            id: $('#meta_id').val(),
            num: $('#add_num').val(),
            title: $('#add_title').val(),
            table: $('#meta_table').val()
             }, function(html) {
                console.log(html);
                $('.test').html(html);

            });
    });


    //on #btn_ins_sec click for #frm_add_section:select (if a select element is NaN)

    //INSERT SECTION USING AJAX

    $('#btn_ins_sec').click(function(){
        $('#frm_add_section  select option:first-of-type').each(function(){
            if(isNaN($(this).val())){
                $(this).val('');
                console.log($(this).val());
            }
        });
        var section = $('#frm_add_section').not('[selected="selected"]').serialize();
        console.log(section);

        $.post('include/add-sec.inc.php', serialize, function(msg){
           console.log(msg);
        });
    });

     // //Show Add title form
    // $('.btn_add_meta').click(function(){
    //     var id = $(this).prev('select').val();
    //     console.log(id);
    //     //if(!isNaN(id)){
    //         $('#add').show();
    //         $('#meta_id').val(id);
    //     //}else{
    //     //    alert("You must select a first.");
    //     //}
    // });

});