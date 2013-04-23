jQuery(document).ready(function($) {
	$('#relevant_modal').dialog({
		autoOpen: false,
		modal: true,
		buttons: {
			"Add": function(){
				$.post(
					'include/section.inc.php',
					{secNum: $('#txt_section').val(), command: 'confirm', currSec: $('#sec_body h1').attr('data-value'), commTxt: $('#txt_rel_comments').val()},
					function(msg){
						console.log(msg);
						$('#relevant_modal').dialog("close");
					});
			},
			"Cancel": function(){
				$('#relevant_modal').dialog("close");
			}
		}
	});

	$('#upload_modal').dialog({
		autoOpen: false,
		modal: true,
		width:350,
		buttons: {
			"Cancel" : function(){
				$('#upload_modal').dialog("close");
			}
		}
	});

	$('#btn_subsec').click(function(){
		//var secNum = $('#txt_section').val();
		//console.log(secNum);
		$.post('include/section.inc.php', {secNum: $('#txt_section').val(), command: 'select'},
			function(html){
				console.log(html);
				$('#relevant_modal').html(html);
				$('#relevant_modal').dialog("open");
		});
	});

	$('#btn_subsrc').click(function(){
		$.post(
			'include/section.inc.php',
			{currSec: $('#sec_body h1').attr('data-value'), srcUrl: $('#txt_source').val(), command: 'addSource'},
			function(msg){
				alert(msg);
		});
	})

	$('#lkb_upload').click(function(){
		$('#upload_modal').dialog("open");
	})



});