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



//jquery code to show the image uploader div

$(document).ready
(
	function(e) 
	{
		$.fn.subShowImgUploader=function(){this.slideToggle("slow")};
		$("#chooseImg").click(function(){$("#imageUpload").subShowImgUploader();
			return false;//note that return false makes the page not jump to the top when you click on the "chooseImg" link
		});	
		
	}
	
);


//jquery code to show/hide the refCaseLaw div

$(document).ready
(
	function(e) 
	{
		$.fn.subRefCaseLaw=function(){this.slideToggle(300)};
		$("#cbx_refCaseLaw").change(function(){$("#refCaseLaw").subRefCaseLaw();
			return false;//note that return false makes the page not jump to the top when you click on the "cbx_refCaseLaw" checkbox
		});	
		
	}
	
);




//jquery code for tool tip used in selecting options(take a profile picture or upload photo.);
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

/////jquery code for tab
$(document).ready(function() {

		$( "#tabs" ).tabs();

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	

//Jquery for date picker

$(document).ready(function() 
	{
		$( "#datepicker" ).datepicker();
	});



