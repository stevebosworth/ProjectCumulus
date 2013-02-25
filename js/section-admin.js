$(document).ready(function() {
    $('#add').hide();
    $('#sel_law').change(function selectLaw(){
        var law_id = $(this).val();
        var dataString = 'law_id=' + law_id;
        $.ajax
        ({
            type: "POST",
            url: "functions/books.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_book').html(html);
            }
        });
    });
    $('#sel_book').change(function selectBook(){
		var book_id = $(this).val();
		var dataString = 'book_id=' + book_id;
		$.ajax
        ({
            type: "POST",
            url: "functions/books.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_title').html(html);
            }
        });
    });
    $('#sel_title').change(function(){
        var title_id = $(this).val();
        var dataString = 'title_id=' + title_id;
        $.ajax
        ({
            type: "POST",
            url: "functions/books.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_ch').html(html);
            }
        });
    });
    $('#sel_ch').change(function(){
        var ch_id = $(this).val();
        var dataString = 'ch_id=' + ch_id;
        $.ajax
        ({
            type: "POST",
            url: "functions/books.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_div').html(html);
            }
        });
    });
    $('#sel_div').change(function(){
        var div_id = $(this).val();
        var dataString = 'div_id=' + div_id;
        $.ajax
        ({
            type: "POST",
            url: "functions/books.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $('#sel_sub_div').html(html);
            }
        });
    });
    $('#btn_add_title').click(function(){
        $('#add').show();
        var book = $('#sel_book').val();
        $('#add_title_book_id').val(book);
    });
    
    $('#btn_ins_title').click(function(){
        // var book_id = $('#add_title_book_id').val();
        // var title_num = $('#add_title_num').val();
        // var title_title = $('#add_title_title').val();
        $.post('functions/add-title.php', {
            book_id: $('#add_title_book_id').val(),
            title_num: $('#add_title_num').val(),
            title_title: $('#add_title_title').val()
             }, function(html) {
                $('.test').html(html);
            });
    });
});