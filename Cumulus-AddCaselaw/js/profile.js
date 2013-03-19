// JavaScript Document


//jquery code to show the advanced search option
$(document).ready
(
	function(e) 
	{
		$.fn.subAdvSearchOptions=function(){this.slideToggle("slow")};
		$("#advanced_Search").click(function(){$("#advancedSearch_options").subAdvSearchOptions();
			
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
			
		});	
		
	}
	
);