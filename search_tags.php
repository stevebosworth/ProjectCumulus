<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Results</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
        
<link href="css/search.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" language="javascript" src="js/search.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script>var $j = jQuery.noConflict();</script>

<script>
	$j(function() {
    	$j( "#tabs" ).tabs();
  	});
  
	$j(document).ready(function(e)
	{
		$j("#filter_button").click(function(e) 
		{
			$j("#filters").slideToggle("slow");
		});
	});
</script>

</head>

<body>
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
                    <li class="usr_control"><a href="#"><img src="img/icons/logout_icon_head.png" alt="Logout" title="Logout" class="icon"></a></li>       	   </ul>
            </nav>
            <nav id="nav_main">
                <ul>
                    <li class="nav_header" class="nav_link"><a href="home.html">Home</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">About</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">Support</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">Blog</a></li>
                    <li class="nav_header" class="nav_link"><a href="#">FAQ</a></li>
                </ul>
            </nav>

        </header>
        
            <div id="search_logo">
                <img src="img/icons/logo.png" alt="Project Cumulus Logo" class="logo_big">
                <!--<h1>Welcome to Project Cumulus</h1>
                <h2>Legal Wiki</h2>-->
            </div>
            <div id="search">
                <div id="banner">
                    <h1>Cumulus Search Results</h1>
                </div>
                <div id="bsc_search">
                    <form id="frm_search" action="search_engine.php" method="POST" >
                        <input type="text" id="txt_search" name="txt_search" placeholder="Search the legal code" />
                        <input type="submit" id="btn_search" name="btn_search" value="Search" />
                    </form>    
                    <div id="adv_option">
                        <label for="cbk_adv">Advanced Search</label>
                        <input type="checkbox" id="cbk_adv" name="chk_adv" value="1" />
                    </div> <!-- /adv_option -->
                </div> <!-- /bsc_search -->               
                <span id="search_text" />
            </div><!--/search-->
        
        <div id="content">
            <!--<div id="result">
                <p id="result_number">Displaying <strong>(number)</strong> results</p>
            </div>-->
            <div id="filter_container">
            	<h3>Sections tagged with <?php
                
                $search_query = $_GET['txt_search'];

                echo '"' . $search_query . '"'; ?></h3>
                
                <!--<input id="filter_button" type="button" value="Filter Results" />-->
                <div id="filters" style="display: none">
                    <ul>
                        <li><a href="#">Relevance</a></li>
                        <li><a href="#">View Count</a></li>
                        <li><a href="#">Rating</a></li>
                    </ul>
                </div> 	
            </div><!--/filter_container-->
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Results</a></li>
                    <li><a href="#tabs-2">Visualize (PRO)</a></li>
                </ul>
                
                <div id="tabs-1"><!--Search results tab-->
                    <article class="result">
						<?php
							require_once('classes/Dbconn.class.php');
							require_once('classes/search_db.class.php');
							require_once('classes/Search.class.php');
                            require_once('classes/add_tags.class.php');
                            require_once('classes/tag_category.class.php');

							$search_query = $_GET['txt_search'];

							if(isset($search_query)){

                                $new_search = new add_tags();
                                $result = $new_search->selectTagByTag($search_query);

                                foreach ($result as $resultset) {
                                    echo "<h5><a href='section.php?section=" . $resultset->getArticle_Ref() . "'>" . 
                                    "Section " . $resultset->getArticle_Ref() . "</a></h5><br />";
                                }
								//$new_search = new search_class();
							    //$result = $new_search->searchSections($search_query);

                                //returns search results with sections and subsections
								/*foreach ($result as $resultset) {
						        	echo "<h5>" . $resultset->getLaw_Name() . " > " . $resultset->getBook_Title() . " > " . $resultset->getTitle_Title() . " > 
                                    " . $resultset->getCh_Title() . " > " . $resultset->getDiv_Title() . " > Section " . "
                                    <a href='section.php?section=" . $resultset->getSec_Num() . "'>" .  $resultset->getSec_Num() . "
                                    </h5>
                                    <br /><a href='section.php?section=" . $resultset->getSec_Num() . "'>
                                    &quot;" . substr($resultset->getSec_Txt(), 0, 50) . "...&quot;</a>
                                    <br /><br />
                                    " ;
                                    //echo "<a href='section.php?section=" . $resultset->getSec_Num() . "'>" . $resultset->getSec_Txt() . "</a><br /><br />" ;
								}*/
							}
							else {
								echo "Error: Invalid Search Query";
							}
						?>
					</article>
                </div><!--/tabs-1-->
                
                <div id="tabs-2"><!--Visualization tab-->
                    <section class="result">
                    visualization tab
                    </section>
                </div><!--/tabs-2-->
            </div><!--/tabs-->
        </div><!--/content-->
    
    
    
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

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script> -->
</body>
</html>