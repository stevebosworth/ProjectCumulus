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

    <!-- All JQuery file links -->
    <script src="js/jquery.js"></script>
            
    <!--All Javascript file links -->
    <script src="js/profile.js" type="text/javascript"></script>
    
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="js/cors/jquery.xdr-transport.js"></script><![endif]-->

    
    <!-- All CSS file links --> 
    <link type="text/css" rel="stylesheet" href="css/main.css"/>    
    <link type="text/css" rel="stylesheet" href="css/profile1.css"/>
   
    
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
                        <li><a href="Profile_Settings.php">Settings</a></li>
                        
                    </ul>
            	</nav>               
			</aside><!--/leftSide_bar-->           
            <div id = "vetical_separatorLeft"></div><!--/vetical_separator-->
            
            
            <aside id="rightSide_bar">
            <div id="rightSideBar_ActiveDiscussionTitle"><h3>Active Discussions</h3></div>
         
            </aside><!--/rightSide_bar-->
            <div id = "vetical_separatorRight"></div><!--/vetical_separator-->
            
            
            
            <div id="profileMain_content">
           		<span id="EditProfilePage_title">Edit Profile</span><!--/EditProfilePage_title-->
                                
           		<div id="editProfile_content">
                
                  <section id="edit_profilePhoto">
                  <div id="editPhoto_title">Photo</div>
                      <figure id="edit_Photo">
                          <img src="#" alt="" title="profile photo"/>                     
                      </figure><!--/edit_profilePhoto-->
                      
                      <div id="choose_photo">
                          <!--copied codes for edit profile photo plugin-->
                       <div id="box">
                          <!--<a href="#" class="bt btleft"><span>&#9734;</span> Favorite</a>-->
                          <a href="#" class="bt" id="btmiddle">Change Photo <span>&#9660;</span></a>
                          <!--<a href="#" class="bt btright">Share this <span>&#9660;</span></a>-->
                      </div><!--/box-->
                      <div id="menu">
                      <div id="triangle"></div>
                      
                      
                      <div id="tooltip_menu">
                                      
                                                                  
                      <!--edit photo menu list-->
                           <a href="#" class="menu_top" >
                              <img src="img/plugins/2.png"/>
                              Choose Existing Photo
                           </a>
                          <a href="#">
                               <img src="img/plugins/3.png"/>
                               Take Photo
                          </a>
                      </div><!--/tooltip_menu-->
                      </div><!--/menu-->
                      </div><!--/choose_photo-->
                      
                         
                  </section><!--/edit_profilePhoto-->
                
                <section id="edit_name">
                	<div id="editName_title">Name</div>
                    <input id="txt_editName" type="text"/>
                </section><!--/edit_name-->
                
                <section id="edit_email">
                	<div id="editEmail_title">Email</div>
                    <input type="text" id="txt_editEmail"/>
                </section><!--/edit_email-->
                
                <section id="edit_password">
                	<div id="current_passwordDetails">
                    	<div id="editPasswordTitle">Password</div>
                    	<input type="password" id="txt_editPassword"/>
                    	<a id="chng_pswDropdown" href="/change_password" class="link_color">Edit</a>
                    </div><!--/current_passwordDetails-->
                	
                    <div id="change_password">
                    <section id="Edit_curPasw">
                    	<span id="currentPasw_Title">Current Password</span><!--/currentPasw_Title-->
                        <input id="txt_currentPassword" type="password"/></section>
                    <section id="Edit_newPasw">
                    	<span id = "newPasw_Title">New Password</span><!--/newPasw_Title-->
                        <input id="txt_newPassword" type="password"/>
                    </section>
                    <section id="Edit_verNewPasw">
                    	<span id = "verifyNewPasw_Title">Verify New Password</span><!--/verifyNewPasw_Title-->
                        <input id="txt_verifyNewPassword" type="password"/>
                    </section>
                    <section id="btn_done">
                    	<input type="submit" id="btn_pswDone" value="Done"/>   
                    </section> 
                    </div><!--/change_password-->
                </section><!--/edit_password-->
                
                <section id="edit_JobTitle">
                	<span id="editJobTitle_title">Qualification</span>
                    <input type="text" id="txt_editJobTitle"/>
                </section><!--/edit_JobStatus-->
                
                <section id="edit_location">
                	<span id="editLocation_title">Location</span>
                    <select id="sel_location">
                    	<option>Australia</option>
                        <option>Canada</option>
                        <option>United States of America</option>
                        <option>Zimbabwe</option>
                    </select>
                </section><!--/edit_location-->
                
                <section id="edit_bio">
                	<span id="editBio_title">Bio</span>
                    <textarea id="txt_editBio" ></textarea>
                </section><!--/edit_bio-->
                	
            </div><!--/editProfile_content-->
            <div id="save_changes">
            <input type="submit" id="btn_saveChanges" value="Save Changes" class="button_size"/>
            </div>
            </div><!--/profileMain_content-->
            
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
    
	
    
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
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
