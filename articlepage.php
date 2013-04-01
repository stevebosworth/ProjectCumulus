<?php
//including the cumulus database PDO connection
require_once 'classes/Dbconn.class.php';

//creating an instance of the class to use for queries
$db = Dbconn::getDB();
//the sql query
$listsql = "SELECT * FROM caselaw";
//variable to hold the query results
$result = $db->query($listsql);

require_once 'classes/vote_db.class.php';
require_once 'classes/vote.class.php';

//creating an instance of the class
$voteDB = new voteDB();
$votes = $voteDB->getVotes();

if (isset($_GET['vote'], $_GET['caselawID'])){
    $voteDB->modifyVotes($_GET['caselawID'], $_GET['vote']);
    header('Location: articlepage.php');
    die();
}


?>

<!DOCTYPE html>
<html>
    <?php include 'include/head.inc.php' ?>
    <body>
        <?php include 'include/header.inc.php' ?>
        
            <div id="content_container">
                <?php include 'include/search.inc.php' ?>
                <article class="law_article">
            	<ul id="breadcrumbs">
                	<li><a href="#">Homepage</a> > </li>
                	<li><a href="#">Search results</a> > </li>
                    <li>Article 45</li>
                </ul>
            	<h2>Article 45</h2>
                <p>"No person shall falsify personal information on a government form"</p>
                <p>a. "except when working as an undercover law enforcement officer."</p>
                <p>b. "because inscribing false information is considered obstruction of justice (Article 21 e.)"</p>
            	<div id="relevant">
                		<hr>
                	<h4>Related Articles</h4>
                    <p>13. Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.</p>
                    <p>417. Lorem ipsum dolor sit amet. Colum ser bit delocit celousm apilken.
                    Lorem ipsum dolor sit amet.</p>
                    	<hr>
                    <h4>Relevant Case Law</h4>
                    
                    <?php
                        //displays caselaws from the database
                        foreach ($result as $row){
                            echo "<p><a href='".$row['url']."'>".$row['case_ref']."</a> "."&nbsp;";
                            echo "(<i>".$row['case_date']."</i>) "."&nbsp;";
                            echo $row['court_id']."-";
                            echo $row['case_id']."</p>";
                            echo "<a href='?vote=up&caselawID=".$row['caselaw_id']."'><img class='voteIcons' src='img/icons/thumb_up.png' alt='vote up' width='25' /></a>";
                            echo "<a href='?vote=down&caselawID=".$row['caselaw_id']."'><img class='voteIcons' src='img/icons/thumb_down.png' alt='vote down' width='25' /></a>";
                        }
                    ?>
                    
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
                    <?php include ('include/list_tags.include.php'); ?>
                    <?php
						foreach ($tag_array as $single_tag) {
							echo "<a href='#'>" . $single_tag->getTag() . "</a>";
						}
					?>
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
                        <p>* = denotes required field</p>
                        <form action="include/insert_caselaw.inc.php" method="POST">
                            <p>Case ID <input type="text" name="case_id" class="resized" />*</p>
                            <p>Court ID <input type="text" name="court_id" class="resized" />*</p>
                            <p>User ID <input type="text" name="user_id" class="resized" />*</p>
                            <p>Case Date <input type="text" name="case_date" class="resized" />*</p>
                            <p>URL <input type="text" name="url" class="resized" />*</p>
                            <p>Case Reference <input type="text" name="case_ref" class="resized" />*</p>
                            <p>Case Description <input type="text" name="case_desc" class="resized" /></p>
                            <p><input type="submit" value="Submit Caselaw" class="sub_button" /></p>
                        </form>
                    </div>
                    
                     <div class="panelshow"><h4>Add Description Tags</h4></div>
                    <div class="panel">
                        <h5>Add descriptory tags by submitting the information below.</h5>
                        <p><label id="tags_label" name="tags_label">Tags:</label>
                        <input type="text" id="txt_tags" name="txt_tags" /></p>
                        <input type="button" id="btn_subtags" name="btn_subtags" onClick="subTags()" value="Submit" />
                    </div>
                    
                    <div class="panelshow"><h4>Comment</h4></div>
                    <div class="panel">
                        <h5>Add your comments below.</h5>
                        <p><label id="comm_label" name="comm_label">Tags:</label>
                        <form id="create_tags" action="include/new_tag.inc.php" method="post">
                        	<input type="text" id="txt_tags" name="txt_tags" /></p>
                        	<input type="submit" id="btn_subtags" name="btn_subtags" onClick="subTags()" value="Submit" />
                        </form>
                    </div>
                    
                </section>
            </div>

        <?php include 'include/footer.inc.php' ?>
        <?php include 'include/closer.inc.php' ?>
    </body>
</html>
