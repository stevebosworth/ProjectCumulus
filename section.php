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
    require_once 'classes/related.class.php';
    require_once 'classes/related_db.class.php';
    require_once 'classes/vote_db.class.php';
    require_once 'classes/vote.class.php';
    require_once 'classes/source.class.php';
    require_once 'classes/sourcedb.class.php';

    $section = new SectionDB();
    $sec_num = $_GET['section'];

    //creating an instance of the class to use for queries
    $db = Dbconn::getDB();
    //the sql query
    $listsql = "SELECT * FROM caselaw WHERE sec_num = $sec_num";
    //variable to hold the query results
    $caselaws = $db->query($listsql);

?> <!-- /requires -->

<!DOCTYPE html>
<head>
    <?php include 'include/head.inc.php'; ?>

    <!-- Additional files for the head section -->
    <title>Project Cumulus - Section <?php echo $sec_num; ?></title>
    <link rel="stylesheet" href="css/jquery-ui-1.10.1.custom.css">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
                <form id="frm_search" action="search_engine.php" method="POST" >
                    <div id="bsc_search">
                        <input type="text" id="txt_search" name="txt_search" placeholder="Search the legal code" />
                        <input type="submit" id="btn_search" name="btn_search" value="Search" />
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
                            if(isset($sec_num))
                            {
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
                            }
                        ?>
                    </div> <!-- /sec_heading -->
                    <div id="sec_body">
                        <?php
                            if(isset($sec_num))
                            {

                                foreach($result as $r){
                                    echo "<h1 data-value=" . $r['sec_num'] . "> Section " . $r['sec_num'] . "</h1>"
                                    . "<h5>" . $r['sec_title'] . "</h5>"
                                    . "<p>" . $r['sec_txt'] . "</p>"
                                    . "<p class='enact'>[" . $r['enact_yr'] . ", " . $r['enact_bill'] . ", " . $r['enact_sec'] . "]</p>";
                                }
                            }else{
                                echo "<h1>No Section Selected</h1><p>Please try a search</p>";
                            }
                        ?>
                    </div> <!-- /sec_body -->
                </div>

                <aside id="rel_section">
                  <hr>
                  <h4>Related Sections</h4>
                  <?php
                    $related = new RelatedDB();
                    $sec_num = $_GET['section'];
                    $rel_sec = $related->selRelated($sec_num);

                    foreach($rel_sec as $r){
                        if($sec_num !== $r->getSec_Num()){
                            echo "<h5><a href='section.php?section=". $r->getSec_num() . "'>Section: " . $r->getSec_num() . "</a></h5>";
                            $section = new SectionDB();
                            $sec_txt = $section->selSectionByNum($r->getSec_num());
                            echo "<p>" . $sec_txt->getSec_txt() . "</p>";
                        }
                        else
                        {
                            echo "<h5><a href='section.php?section=". $r->getRel_sec_id() . "'>Section: " . $r->getRel_sec_id() . "</a></h5>";
                            $section = new SectionDB();
                            $sec_txt = $section->selSectionByNum($r->getRel_sec_id());
                            echo "<p>" . $sec_txt->getSec_txt() . "</p>";
                        }
                    }
                   ?>
                </aside> <!-- /relevant sections -->

                <aside id="rel_source">
                    <hr>
                    <h4>Related Reading</h4>
                    <ul>
                    <?php
                        $sources = new SourceDB();
                        $rel_src = $sources->getSourcesBySec($sec_num);

                        foreach($rel_src as $r){
                            echo "<li><a href='" . $r->getUrl() . "'>" . $r->getUrl() . "</a></li>";
                        }
                     ?>
                    </ul>
                </aside>

                <aside id='relCaselaws'>
                    <hr>
                    <h4>Related Case Law</h4>
                    <?php
                        if(isset($sec_num)){
                        //displays caselaws from the database
                        foreach ($caselaws as $cl){ ?>
                            <div class='indCaselaw'>
                    <?php   echo "<p><a href='".$cl['url']."'>".$cl['case_ref']."</a> "."&nbsp;";
                            echo "(<i>".$cl['case_date']."</i>) "."&nbsp;";
                            echo $cl['court_id']."-";
                            echo $cl['case_id']."</p>";
                            $voteDB = new voteDB();
                            $votes = $voteDB->getVotesByCaselawID($cl['caselaw_id']);
                            foreach ($votes as $v) {
                            ?>
                                <div class='votes'>
                                    <button type='submit' class='voteIcons' name='up' value='up'>
                                        <img src='img/icons/thumb_up.png' class='voteButton' width='26' alt='submit vote up' />
                                    </button>
                                    <span style='display:none;' class='caselawID'><?= $cl['caselaw_id'] ?></span>
                                    <div class='vote_result'><?= $v['votes_up'] ?></div><!-- end vote_result -->
                                </div><!-- end votes -->

                                <div class='votes'>
                                    <button type='submit' class='voteIcons' name='down' value='down'>
                                        <img src='img/icons/thumb_down.png' class='voteButton' width='26' alt='submit vote down' />
                                    </button>
                                    <span style='display:none;' class='caselawID'><?= $cl['caselaw_id'] ?></span>
                                    <div class='vote_result'><?= $v['votes_down'] ?></div><!-- end vote_result -->
                                </div><!-- end votes -->
                    <?php   } ?>
                            </div><!-- end indCaselaw -->
                    <?php } } else { } ?>
                </aside>
            </article> <!-- /law_article -->

            <section id="sidebar">
                <aside id="word_cloud">
                    <h3>Parts of this law are mentioned in:</h3>

                    <!-- tag "cloud" section -->
                    <?php include ('include/list_tags.inc.php'); ?>
                    <?php
                        foreach ($tag_array as $single_tag) {
                            echo "<a href='search_tags.php?txt_search=" . $single_tag->getTag() . "'>" . $single_tag->getTag() . "</a>";
                        }
                    ?>
                </aside>
                <div class="accordion">
                    <div class="panelshow"><h4>Add Related Section</h4></div>
                    <div class="panel">
                        <h5>You may add a related section by submitting the information below.</h5>
                        <h4>Section Number:</h4>
                        <input type="text" id="txt_section" name="txt_section" />
                        <input type="button" id="btn_subsec" name="btn_subsec" value="Submit" />
                        <h5>You can quick add a section or enter a search to find sections</h5>
                    </div> <!-- /panel related section -->

                    <div class="panelshow"><h4>Add External Source</h4></div>
                    <div class="panel">
                        <h5>Add a link to an external source related to this section.  You can click also <a id="lkb_upload" href="#">upload a file</a>.</h5>
                        <h4>Url:</h4>
                        <input type="text" id="txt_source" name="txt_source" />
                        <input type="button" id="btn_subsrc" name="btn_subsrc" value="Submit" />
                    </div> <!-- /panel source -->

                    <div class="panelshow"><h4>Add Case Law</h4></div>
                    <div class="panel">
                        <h5>You may add related case law by submitting the information below.</h5>
                        <p>* = denotes required field</p>
                        <form action="include/insert_caselaw.inc.php" method="POST">
                            <?php echo "<input type='hidden' name='sec_num' value=".$sec_num." />" ?>
                            <p>Case ID <input type="text" name="case_id" class="resized" />*</p>
                            <p>Court ID <input type="text" name="court_id" class="resized" />*</p>
                            <p>User ID <input type="text" name="user_id" class="resized" />*</p>
                            <p>Case Date <input type="text" name="case_date" class="resized" />*</p>
                            <p>URL <input type="text" name="url" class="resized" />*</p>
                            <p>Case Reference <input type="text" name="case_ref" class="resized" />*</p>
                            <p>Case Description <input type="text" name="case_desc" class="resized" /></p>
                            <p><input type="submit" value="Submit Caselaw" class="sub_button" /></p>
                        </form>
                    </div><!-- /panel case law-->

                    <div class="panelshow"><h4>Add Description Tags</h4></div>
                    <div class="panel">
                        <h5>Add descriptory tags by submitting the information below.</h5>
                        <p>
                            <label id="tags_label" name="tags_label">Tags:</label>
                            <form id="create_tags" action="new_tag.php" method="post">
                            	<input type="text" id="txt_tags" name="txt_tags" />
                                <input type="submit" id="btn_subtags" name="btn_subtags" value="Submit" />
                            </form>
                        </p>
                    </div> <!-- /panel add desc tags-->

                    <div class="panelshow"><h4>Comment</h4></div>
                    <div class="panel">
                        <h5>Add your comments below.</h5>
                        <p>
                            <label id="comm_label" name="comm_label">Tags:</label>
                            <input type="text" id="txt_comm" name="txt_comm" />
                        </p>
                            <input type="button" id="btn_subcomm" name="btn_subcomm" onClick="subComments()" value="Submit" />
                    </div> <!-- /panel -->
                </div> <!-- /accordion -->
            </section> <!-- /sidebar -->
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

    <!-- MODAL FOR ADDING RELEVANT CASE LAW/SECTIONS -->
    <div id="relevant_modal" style="display:none;">

    </div>

    <!-- MODAL FOR UPLOADING SRCS LAW/SECTIONS -->
    <div id="upload_modal" style="display:none;">
        <form id="frm_upload" action="include/upload_src.inc.php" method="post" enctype="multipart/form-data">
            <?php echo '<input type="hidden" name="sec_num" value="'. $sec_num . '">' ?>
            <input type="file" name="txt_path">
            <input type="submit" name="submit">
        </form>
    </div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/section.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-ui-1.10.1.custom.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!--<script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>-->
</body>
</html>
