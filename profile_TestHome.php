<?php 
session_start(); 
//includes
require_once('classes/UserProfileClasses/database.class.php');
require_once('classes/UserProfileClasses/login_db.class.php');
require_once('classes/UserProfileClasses/login.class.php');
require_once('classes/UserProfileClasses/validation.class.php');

//set the location of the re-register file and profile_home page file to redirect to
$reLoginurl="location:include/profile_includes/Profile_LoginErrorTryTillLoginSuccessful.inc.php";
$profileHomeurl="location:Profile_Home.php";

//if the page posts back to itself, do the following
if($_POST)
{
	$myValidation=new Validation();
	$myValidation->validateLogin($reLoginurl,$profileHomeurl);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

	<html class="no-js"> <!--<![endif]--><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Project Cumulus Home Page</title>
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
    <!--CSS for date picker-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="/resources/demos/style.css" />
    <link href="img/test.PNG"
    
</head>
<body>


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
            
            <div id="login_controls">
            <form  method="post" action="profile_TestHome.php">
            
            <br/><br/>
            <!--<span>Username:</span>-->
            <input type="text" name="txt_email" placeholder="Email" autocomplete="on"/>
            <!--<span>Password:</span>-->
            <input type="password" name="txt_password" placeholder="Password"/>
           
            <input type="submit" name="btn_submitLogin" value="Login" /> <br/>
            <a href="include/profile_includes/passReset_inputEmailOrUsername.inc.php">Forgot your Password?</a>
            </form>
            </div><!--login_controls-->

        </header>
                




		<!--/////////////My codes for div content_container////////////-->
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        
        			<h1>THIS IS MY PROFILE TEST HOME PAGE</h1>
         <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            
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
