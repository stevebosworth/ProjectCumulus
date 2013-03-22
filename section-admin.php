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
        <div id="add_section">
            <form id="frm_add_section" name="frm_add_sections" method="post">
                <label for="sel_law">Law: </label>
                <select name="sel_law" id="sel_law" data-table="laws">
                    <option selected="selected">-- Choose a Law --</option>
                    <?php
                        $law_class = new LawDB();
                        $arr_laws = $law_class->selLaws();
                        foreach($arr_laws as $l) : ?>
                        <option class="law" value="<?php echo $l->getLaw_id(); ?>"><?php echo $l->getLaw_name(); ?></option>
                    <?php endforeach; ?>
                </select>
                <br />
                <label for="sel_book">Book: </label>
                <select name="sel_book" id="sel_book" data-table="books">
                    <option selected="selected">-- Choose a Law First --</option>
                </select>
                <br />
                <label for="sel_title">Title: </label>
                <select name="sel_title" id="sel_title" data-table="titles">
                    <option selected="selected">-- Choose a Book First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_title" value="add">
                <br />
                <label for="sel_ch">Chapter: </label>
                <select name="sel_ch" id="sel_ch" data-table="chapters">
                    <option selected="selected">-- Choose a Title First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_ch" value="add">
                <br />
                <label for="sel_div">Division: </label>
                <select name="sel_div" id="sel_div" data-table="divisions">
                    <option selected="selected">-- Choose a Chapter First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_div" value="add">
                <br />
                <label for="sel_sub_div">Sub-Division: </label>
                <select name="sel_sub_div" id="sel_sub_div" data-table="subdivisions">
                    <option selected="selected">-- Choose a Division First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_sub_div" value="add">
                <br />
                <label for="sec_num">Section #: </label>
                <input type="text" name="sec_num">
                <br/>
                <label for="sec_title">Section Title: </label>
                <input type="text" name="sec_title">
                <br/>
                <label for="sec_text">Section Text: </label>
                <input type="text" name="sec_text">
                <br/>
                <label for="enact_yr">Year of Enactment: </label>
                <input type="text" name="enact_yr">
                <br/>
                <label for="enact_bill">Bill enacted: </label>
                <input type="text" name="enact_bill">
                <br>
                <label for="enact_sec">Section Enacted: </label>
                <input type="text" name="enact_sec">
                <br>
                <input type="button" id="btn_ins_sec" value="submit">
            </form>
        </div> <!-- /add_section -->
        <p class="test"></p>

        <div id="add" style="display:none;">
            <form id="add_meta" method="post" name="add_meta">
                <h3 id="add_meta_head"></h3>
                <br />
                <input type="hidden" id="meta_id" name="meta_id">
                <input type="hidden" id="meta_table" name="meta_table"
                <label for="title_num">Number: </label>
                <input type="text" id="add_num" name="title_num">
                <br/>
                <label for="title_title">Title: </label>
                <input type="text" id="add_title" name="title_title">
                <br/>
                <input type="button" id="btn_ins_meta" value="Add">
                <input type="button" id="btn_cancel_meta" value="Cancel">
            </form>
        </div> <!-- /add -->

        <section>
            <table>
                <thead>
                    <th>Sec #</th>
                    <th>Title</th>
                    <th>Section</th>
                    <th>Book</th>
                    <th>Title</th>
                    <th>Chapter</th>
                    <th>Division</th>
                    <th>Sub Division</th>
                </thead>
                <?php
                    $sec_class = new SectionDB();
                    $sec_array = $sec_class->selAllFromSections();
                    //echo "<pre>" . var_dump($sec_array) . "</pre>";
                    foreach($sec_array as $s) : ?>
                    <tr>
                        <?php foreach($s as $i){
                            switch($i){
                                case is_a($i, 'section'):
                                    echo "<td>" . $i->getSec_Num() . "</td>";
                                    echo "<td>" . $i->getSec_Title(). "</td>";
                                    echo "<td>" . $i->getSec_Txt() . "</td>";
                                break;
                                case is_a($i, 'book'):
                                    if($i->getBook_Id() !== 0){
                                        echo "<td>" . $i->getBook_Num(). ". " . $i->getBook_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'title'):
                                    if($i->getTitle_Id() !== 0){
                                        echo "<td>" . $i->getTitle_Num(). ". " . $i->getTitle_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'chapter'):
                                    if($i->getCh_Num() !== 0){
                                        echo "<td>" . $i->getCh_Num(). ". " . $i->getCh_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'division'):
                                    if($i->getDiv_Id() !== 0){
                                        echo "<td>" . $i->getDiv_Num(). ". " . $i->getDiv_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'subdivision'):
                                    echo "<td>" . $i->getSub_div_num(). ". " . $i->getSub_div_title(). "</td>";
                                break;
                            }
                        } ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>

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
