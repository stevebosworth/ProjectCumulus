//jquery code to show the advanced search option
$(document).ready
(
	function(e) 
	{
		$.fn.subAdvSearchOptions=function(){this.slideToggle("slow")};
		$("#advanced_Search").click(function(){$("#advancedSearch_options").subAdvSearchOptions();
			 return false;//note that return false makes the page not jump to the top when you click on the "advanced_Search" link
		});	
		
	}
	
);

//jquery code to show the change/edit password option

$(document).ready
(
	function(e) 
	{
		$.fn.subChangePassword=function(){this.slideToggle("slow")};
		$("#chng_pswDropdown").click(function(){$("#change_password").subChangePassword();
			return false;//note that return false makes the page not jump to the top when you click on the "chng_pswDropdown" link
		});	
		
	}
	
);



////////javascript codes for the web cam.////////
$(function()
	{
		webcam.set_api_url('jpegcam/htdocs/upload.php' );
		webcam.set_swf_url( 'jpegcam/htdocs/webcam.swf' );
		webcam.set_quality( 90 );
		webcam.set_shutter_sound( true, 'jpegcam/htdocs/shutter.mp3' );
		$('#camera').html(webcam.get_html(320,240));
		
		webcam.set_stealth( true );
		
		setInterval(function()
		{
			$('#uploads').load('get_uploads.php');
			
		},1000);
		
	});

//$(function()
//	{
//		webcam.set_hook()
//	});




/*$(document).ready(function(){
  $("#btn_hide").click(function(){
    $("#p2").hide();
  });
});*/
/////////code for edit profile photo button/////////
/*$(window).load(
	function() {
		
                $(".btmiddle").click(function() {
                    if ($(".btmiddle").hasClass("bt")) {
                        $(".btmiddle").removeClass("bt");
                        $(".btmiddle").addClass("clicked");
                        $("#menu").show();
						
                    } else {
                        $(".btmiddle").removeClass("clicked");
                        $(".btmiddle").addClass("bt");
                        $("#menu").hide();
						
                    }
                });
            
});*/


$(window).load(function() {
	
                $("#btmiddle").click(function() {
                    if ($("#btmiddle").hasClass("bt")) {
                        $("#btmiddle").removeClass("bt");
                        $("#btmiddle").addClass("clicked");
                        $("#menu").show();
                    } else {
                        $("#btmiddle").removeClass("clicked");
                        $("#btmiddle").addClass("bt");
                        $("#menu").hide();
                    }
					
					return false;
                });
            
    
});


