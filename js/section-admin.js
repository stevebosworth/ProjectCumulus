$(document).ready(function() {
    $('#add').hide();


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
        var law_id = $(this).val();
        var dataString = 'law_id=' + law_id;
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
		var book_id = $(this).val();
		var dataString = 'book_id=' + book_id;
		$.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_title').html(html);
            }
        });
    });

    //Set Chapter Drop Down
    $('#sel_title').change(function(){
        var title_id = $(this).val();
        var dataString = 'title_id=' + title_id;
        $.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_ch').html(html);
            }
        });
    });

    //Set Division Drop Down
    $('#sel_ch').change(function(){
        var ch_id = $(this).val();
        var dataString = 'ch_id=' + ch_id;
        $.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_div').html(html);
            }
        });
    });

    //Set Sub-Division Drop Down
    $('#sel_div').change(function(){
        var div_id = $(this).val();
        var dataString = 'div_id=' + div_id;
        $.ajax
        ({
            type: "POST",
            url: "include/section-admin.inc.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_sub_div').html(html);
            }
        });
    });

    //Show Add title form
    $('.btn_add_meta').click(function(){
        var id = $(this).prev().val();
        console.log(id);
        //if(!isNaN(id)){
            $('#add').show();
            $('#meta_id').val(id);
        //}else{
        //    alert("You must select a first.");
        //}
    });

    //Insert new title
    $('#btn_ins_title').click(function(){
        $.post('functions/add-title.php', {
            id: $('#add_title_book_id').val(),
            title_num: $('#add_title_num').val(),
            title_title: $('#add_title_title').val()
             }, function(html) {
                $('.test').html(html);
            });
    });
});