$(document).ready(function() {
            $('#sel_law').change(function(){
                var law_id = $(this).val();
                var dataString = 'law_id=' + law_id;
                $.ajax
                ({
                    type: "POST",
                    url: "functions/section_admin_func.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $('#sel_book').html(html);
                    }
                });
            });
            $('#sel_book').change(function(){
				var book_id = $(this).val();
				var dataString = 'book_id=' + book_id;
				$.ajax
                ({
                    type: "POST",
                    url: "functions/section_admin_func.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $('#sel_title').html(html);
                    }
                });
            });
        });