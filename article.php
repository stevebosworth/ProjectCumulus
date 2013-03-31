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

$section = new SectionDB();
$sec_num = $_GET['section'];
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
    <link rel="stylesheet" href="css/article.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="http://use.edgefonts.net/arvo.js"></script>
    <!-- Last edited by Chris Voorberg - February 9 2013 -->
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

            <div id="search">
                <form id="frm_search">
                    <div id="bsc_search">
                        <input type="text" id="txt_search" name="txt_search" placeholder="Search the legal code" />
                        <input type="button" id="btn_search" name="btn_search" value="Search" />
                        <div id="adv_option">
                            <label for="cbk_adv">Advanced Search</label>
                            <input type="checkbox" id="cbk_adv" name="chk_adv" value="1" />
                        </div> <!-- /adv_option -->
                    </div> <!-- /bsc_search -->
                    <div id="adv_search">
                        <fieldset id="adv_fields">
                            <legend>Advanced Search</legend>
                            <label for="sel_code">Choose a Code:</label>
                            <select id="sel_code" name="sel_code">
                                <optgroup label="Federal"><option value="fcc" id="crim_code"></option></optgroup>
                                <optgroup label="Quebec"><option value="qcc" id="qcc" selected="selected">Quebec Civil Code</option></optgroup>
                                <optgroup label="Ontario"></optgroup>
                            </select>
                            <label for="sel_search">Search in:</label>
                            <input type="radio" name="">

                        </fieldset>
                    </div> <!-- /adv_search -->
                </form>
            </div> <!-- /search -->

            <article class="law_article">
            	<ul id="breadcrumbs">
                   <li><a href="#">Homepage</a> > </li>
                   <li><a href="#">Search results</a> > </li>
                   <li>Section: <?php echo $sec_num; ?> </li>
               </ul>
            <div id="section">
                <div id="sec_heading">
                <?php
                    //Get all for specified section
                    $this_sec = $section->selAllFromSection($sec_num);
                    //take specified section and return array of that object
                    $result = $section->getSectionAll($this_sec);

                    foreach($result as $r){
                        echo "<h3>Book " . $r['book_num'] . ". </h3><h4>" . $r['book_title'] . "</h4>";
                        echo "<h3>Title " . $r['title_num'] . ". </h3><h4>" . $r['title_title'] . "</h4>";
                        echo "<h3>Chapter " . $r['ch_num'] . ". </h3><h4>" . $r['ch_title'] . "</h4>";
                        echo "<h3>Division " . $r['div_num'] . ". </h3><h4>" . $r['div_title'] . "</h4>";
                        echo "<h3>&sect " . $r['sub_div_num'] . ". </h3><h4>" . $r['sub_div_num'] . "</h4>";
                    }
                ?>
                </div>
                <div id="sec_body">
                <?php
                    foreach($result as $r){
                        echo "<h1> Section " . $r['sec_num'] . "</h1>";
                        echo "<h5>" . $r['sec_title'] . "</h5>";
                        echo "<p>" . $r['sec_txt'] . "</p>";
                        echo "<p class='enact'>[" . $r['enact_yr'] . ", " . $r['enact_bill'] . ", " . $r['enact_sec'] . "]</p>";
                    }

                    var_dump($result);
                ?>
                </div>
            </div>
            <p><?php //var_dump($this_sec) ?></p>

            <div id="relevant">
              <hr>
              <h4>Related Articles</h4>
              <p>13. Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.</p>
              <p>417. Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.
                Lorem ipsum dolor sit amet.</p>
                <hr>
                <h4>Relevant Case Law</h4>
                <p>Johnson v. Blatche (2005) - Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.</p>
                <p>McDonald's v. PITA (2012) - Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.</p>
                <p>Kramer v. Kramer (1997) - Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.</p>
                <p>Primeau v. Gilmore (1993) - Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.</p>
                <hr>
                <h4>User Comments</h4>
                <p>John Q. Public: "Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken."</p>
                <p>Stretch Armstrong: "Colum ser bit delocit celousm apilken. Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet."</p>
                </div>
            </article>
            <section id="sidebar">
                <aside id="word_cloud">
                    <h3>Parts of this law are mentioned in:</h3>
                    <?php
                    include ('db_connection.php');

                    include ('classes/db_connection.class.php');
                    foreach ($tagset as $tag) : ?>
                    <p><a href="#"><?php echo $tag[1]; ?></a></p>
                <?php endforeach; ?>
                <?php include ('list_tags.php') ?>
                <?php foreach ($tag_array as $single_tag) : ?>
                <p>
                    <a href="#">
                        <?php echo $single_tag->getID(); ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </aside>

</aside>
<p class="tag1">626</p>
</aside>

<div class="accordion">

    <div class="panelshow"><h4>Add Related Article</h4></div>
    <div class="panel">
        <h5>You may add an article related to this subject matter by submitting the information below.</h5>
        <p><label id="art_label" name="art_label">Article:</label>
            <input type="text" id="txt_article" name="txt_article" /></p>
            <input type="button" id="btn_subart" name="btn_subart" onClick="subArticle()" value="Submit" />
        </div>

        <div class="panelshow"><h4>Add Case Law</h4></div>
        <div class="panel">
            <h5>You may add related case law by submitting the information below.</h5>
            <p><label id="case_label" name="case_label">Case Law:</label>
                <input type="text" id="txt_case" name="txt_case" /></p>
                <p><label id="desc_label" name="desc_label">Description:</label>
                    <input type="text" id="txt_desc" name="txt_desc" /></p>
                    <input type="button" id="btn_subcase" name="btn_subcase" onClick="subCase()" value="Submit" />
                </div>

                <div class="panelshow"><h4>Add Description Tags</h4></div>
                <div class="panel">
                    <h5>Add descriptory tags by submitting the information below.</h5>
                    <p><label id="tags_label" name="tags_label">Tags:</label>
                        <form id="create_tags" action="new_tag.php" method="post">
                        	<input type="text" id="txt_tags" name="txt_tags" /></p>
                        	<input type="submit" id="btn_subtags" name="btn_subtags" value="Submit" />
                        </form>
                    </div>

                    <div class="panelshow"><h4>Comment</h4></div>
                    <div class="panel">
                        <h5>Add your comments below.</h5>
                        <p><label id="comm_label" name="comm_label">Tags:</label>
                            <input type="text" id="txt_comm" name="txt_comm" /></p>
                            <input type="button" id="btn_subcomm" name="btn_subcomm" onClick="subComments()" value="Submit" />
                        </div>

                    </section>

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
