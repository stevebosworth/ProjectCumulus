<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

	<html class="no-js"> <!--<![endif]--><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Edit Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
     <!--Place favicon.ico and apple-touch-icon.png in the root directory--> 

   <!-- Main Javascript and Jquery -->
    <script src="js/jquery.js"></script>
    <script src="js/profile.js" type="text/javascript"></script>
    
     <!--javascript for tab-->
 	<script src="tabs/js/jquery-1.9.1.js"></script>
	<script src="tabs/js/jquery-ui-1.10.2.custom.js"></script>
    
    <!--javascript for date picker-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="js/cors/jquery.xdr-transport.js"></script><![endif]-->

    
    <!-- Main CSS --> 
    <link type="text/css" rel="stylesheet" href="css/main.css"/>    
    <link type="text/css" rel="stylesheet" href="css/profile1.css"/>
    
     <!--CSS for tab-->
 	<link href="tabs/css/smoothness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="/resources/demos/style.css" />
    
    <!--CSS for date picker-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="/resources/demos/style.css" />
       
</head>
<body>


<form>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div id="container">
        <header>
            <div id="title">
                <a href="#"><img src="img/icons/header_logo.png" alt="Project-Cumulus-Logo" id="logo"></a>
            </div>

            <nav id="nav_controls">
                <ul>
                    <li class="usr_control"><a href="#"><img src="img/icons/chat_icon_head.png" alt="Chat" title="Chat" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/mail_icon_head.png" alt="Messages" title="Messages" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/profile_icon_head.png" alt="Profile" title="Profile" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/settings_icon_head.png" alt="Settings" title="Settings" class="icon"></a></li>
                    <li class="usr_control"><a href="#"><img src="img/icons/logout_icon_head.png" alt="Logout" title="Logout" class="icon"></a></li>
                </ul>
            </nav>
            <nav id="nav_main">
                <ul>
                    <li class="nav_header" class="nav_link"><a href="#">Home</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">About</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">Support</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">Blog</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">FAQ</a></li>
                </ul>
            </nav>

        </header>
                
 
		<!--/////////////My codes for div content_container////////////-->
        
        <div id="content_container">
        
        	<div id="profile_photo">
            profile photo
        	</div><!--/profile_photo-->
            
            <div id="profileNameAnd_searchArea">
            
            <div id="activeUser_name">
            <p>Welcome Nnabugwu</p>
            </div><!--/activeUser_name-->
            
            <div id="searchBox_Area">
            
            	<div id="search_Box">
                	<input type="text" name="txt_search" placeholder="Search All" autocomplete="on"/>
                </div><!--/search_Box-->
            	<div id="search_Button">
                	<input type="button" name="btn_search" value="Search" class="button_size"/>
                </div><!--/search_Button-->
                <div id="advanced_Search">
                	<a href="#" class="link_color">Advanced Search</a>
                </div><!--/advanced_Search-->
            </div><!--/searchBoxArea-->
            
        </div><!--/profileNameAnd_searchArea-->
        
        <div id="advancedSearch_options">        	
        </div><!--/advancedSearch_options-->
        
        
			<aside id="leftSide_bar">
            <div id="profileMenu_title"><h3>Profile Menu</h3></div>
            	<nav id="profile_menu">
                	<ul>
                    	<li><a href="Profile_Home.php">Profile</a></li>
                        <li><a href="Profile_Messages.php">Messages</a></li>
                    	<li><a href="Profile_Discussions.php">Discussions</a></li>
                        <li class="event"><a href="Profile_Events.php">Events</a></li>
                        <li><a href="Profile_Friends.php">Friends</a></li>                    
                        <li><a href="#">Law Quick Link</a></li>
                    </ul>
            	</nav>               
			</aside><!--/leftSide_bar-->           
            <div id = "vetical_separatorLeft"></div><!--/vetical_separator-->
            
            
            <aside id="rightSide_bar">
            <div id="rightSideBar_ActiveDiscussionTitle"><h3>Active Discussions</h3></div>
         
            </aside><!--/rightSide_bar-->
            <div id = "vetical_separatorRight"></div><!--/vetical_separator-->
            
            
            
            <div id="EventsMain_content">
           	<!------ Tabs --------->
            <div id="tabs">
                <ul>
                    <li><a href="#tabs_createEvents">+ Create Events</a></li>
                    <li><a href="#tabs_manageEvents">Manage Events</a></li>
                    
                </ul>
                <div id="tabs_createEvents">
                	<span>Name</span>
                    <input type="text" name="txt_name"/><br/><br/>
                    <span>Date</span>
                    <input type="text" id="datepicker" /><br/><br/>
                    <span>Time</span>
                    <input type="text" name="txt_time"/><br/><br/>
                    <span>Venue</span>
                    <input type="text" name="txt_location"/><br/><br/>
                    <span>Description</span>
                    <input type="text" name="txt_description"/><br/><br/>
                    <span>Audience</span>
                    <select>
                    	<option>All</option>
                        <option>Friends Only</option>
                    </select>
                 	
                </div>
                
                <div id="tabs_manageEvents">
                	 <!--options below stay static as titles are selected and opened up.-->
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                    <br/><br/>
                    
                    <input type="checkbox" name="cbx_selectDiscus"/>
                    
                	<span>Event Name</span>&nbsp;&nbsp;&nbsp;&nbsp;<!--to be modified later. no &nbsp; tags-->
                    <span>Date</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br/><br/>
                    <!--the data below is to be pulled from the database-->
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><a href="#">Meeting of all law students</a></span>&nbsp;&nbsp;
                    <span>20-01-2013</span>&nbsp;&nbsp;
                    <br/><br/>
                    
                    <!--the data below is to be pulled from the database-->
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><a href="#">Lawyers meetup</a></span>&nbsp;&nbsp;
                    <span>06-02-2013</span>&nbsp;&nbsp;
                    
               	</div>
                
            </div>
            </div><!--/EventsMain_content-->
            
                       
        </div> <!-- /content_container -->
        
         <footer>
            <nav id="nav_footer">
                <ul>
                    <li><a href="#" class="nav_link">Home</a></li>
                    <li><a href="#" class="nav_link">Join</a></li>
                    <li><a href="#" class="nav_link">Login</a></li>
                    <li><a href="#" class="nav_link">Contact</a></li>
                    <li><a href="#" class="nav_link">Terms & Legal</a></li>
                </ul>
            </nav>
            <nav id="nav_social">
                <ul>
                    <li><a href="#" class="share"><img src="img/icons/facebook_icon_foot.png" alt="Facebook" title="Facebook" class="share_icon"></a></li>
                    <li><a href="#" class="share"><img src="img/icons/twitter_icon_foot.png" alt="Twitter" title="Twitter" class="share_icon"></a></li>
                    <li><a href="#" class="share"><img src="" alt="" class="share_icon"></a></li>
                </ul>
            </nav>
            <small id="copyright">&copy; Project Cumulus, 2013.</small>
        </footer>
    </div> <!-- /container -->


   <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!--<script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>-->
  		
   
</body>
</html>
