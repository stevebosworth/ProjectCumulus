jQuery(document).ready(function($) {
	$('#relevant_modal').dialog({
		autoOpen: false,
		buttons: {
			"Add": function(){
				$.post('include/search_section.inc.php',
				{secNum: $('#txt_section').val(), command: 'confirm', currSec: $('#sec_body h1').attr('data-value'), commTxt: $('#txt_rel_comments').val()},
				function(msg){
					alert(msg);
					$('#relevant_modal').dialog("close");
				});
			},
			"Cancel": function(){
				$('#relevant_modal').dialog("close");
			}
		}
	});

	$('#btn_subsec').click(function(){
		var secNum = $('#txt_section').val();
		console.log(secNum);
		$.post('include/search_section.inc.php', {secNum: $('#txt_section').val(), command: 'select'}, function(html){
			console.log(html);
			$('#relevant_modal').html(html);
			$('#relevant_modal').dialog("open");
		});
	});
});