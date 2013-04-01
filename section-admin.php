<?php
require_once 'classes/Dbconn.class.php';
require_once 'classes/section.class.php';
require_once 'classes/section_db.class.php';
require_once 'classes/law.class.php';
require_once 'classes/law_db.class.php';
require_once 'classes/book.class.php';
require_once 'classes/book_db.class.php';
require_once 'classes/title.class.php';
require_once 'classes/title_db.class.php';
require_once 'classes/chapter.class.php';
require_once 'classes/chapter_db.class.php';
require_once 'classes/division.class.php';
require_once 'classes/division_db.class.php';
require_once 'classes/sub_division.class.php';
require_once 'classes/sub_division_db.class.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Project Cumulus Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/jquery-ui-1.10.1.custom.css">
    <link rel="stylesheet" href="css/section-admin.css">
    <!-- Add your styles and rename this link -->
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <script src="http://use.edgefonts.net/arvo.js"></script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
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
    </header>

    <div id="content_container">
        <div id="login">
            <?php
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                if($user == "adam" && $pass == "fbwizard")
                {
                    include_once("admin/section-admin-secure.php");
                }
                else
                {
                    echo "You must enter a password and username to view this page.";
                }
                if(isset($_POST))
                {?>
                    <form method="POST" action="section-admin.php">
                        User <input type="text" name="user"></input>
                        Pass <input type="password" name="pass"></input>
                        <input type="submit" name="submit" id="submit"></input>
                    </form>
                <?}?>
        </div>


    </div> <!-- /content_container -->

    <footer>
        <nav id="nav_footer">
            <ul>
                <li><a href="#" class="nav_link">Home</a></li>
                <li><a href="#" class="nav_link">Join</a></li>
                <li><a href="#" class="nav_link">Login</a></li>
                <li><a href="#" class="nav_link">Contact</a></li>
                <li><a href="#" class="nav_link">Terms &amp; Legal</a></li>
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
<script type="text/javascript" src="js/vendor/jquery-ui-1.10.1.custom.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/section-admin.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!--<script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>-->
</body>
</html>
