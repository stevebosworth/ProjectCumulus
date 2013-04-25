<?php 
//includes
include 'classes/UserProfileClasses/database.class.php';
include 'classes/UserProfileClasses/validation.class.php';
//declare session
session_start();

//if session has ended or expired, redirect to login page
if(empty($_SESSION['email'])||empty($_SESSION['password']))
{
	header("location:include/profile_includes/Profile_LoginErrorTryTillLoginSuccessful.inc.php");
}

if($_POST)
{
	if(isset($_POST['btn_createDiscus']))
	{	//note that date of creation and author is pulled from current date and current users name
		$disAuthor=$_SESSION['firstname'].' '.$_SESSION['lastname'];
		$dateTimeCreated=date("Y-m-d H:i:s");
		$disTitle=$_POST['txt_discusTitle'];
		$disSection=$_POST['txt_section'];
		$disCaseLaw=$_POST['txt_caseLaw'];
		$disBody=$_POST['txt_body'];
		$disAudience=$_POST['ddl_Audience'];
		
		$val=new Validation();
		$val->validateCreateDiscusn($disAuthor,$dateTimeCreated,$disTitle,$disSection,$disCaseLaw,$disBody,$disAudience);
	}
	
	
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
    <!--CSS for date picker-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="/resources/demos/style.css" />
 	
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
                
 
<!--/////////////My codes for div content_container////////////-->
        
        <div id="content_container">
        
        	<div id="profile_photo">
            	<img src="<?php echo $_SESSION['photourl'] ?>" alt="profile photo" />
        	</div><!--/profile_photo-->
            
            <div id="profileNameAnd_searchArea">
            
            <div id="activeUser_name">
            <p><?php echo'Welcome '.$_SESSION['firstname']; ?></p>
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
            
            
            
            <div id="DiscussionsMain_content">
            	
           		<!------ Tabs --------->
            <div id="tabs">
                <ul>
                    <li><a href="#tab_createDiscus">+ Create Discussion</a></li>
                    <li><a href="#tab_manageDiscus">Manage Discussion</a></li>
                    
                </ul>
                <div id="tab_createDiscus" class="overflow">
                <form action="Profile_Discussions.php" method="post">
                	<span>Discussion Title</span>
                    <input type="text" name="txt_discusTitle"/><br/><br/>
                    <span>Section</span>
                    <input type="text" name="txt_section"/><br/><br/>
                    
                    <input type="checkbox" id="cbx_refCaseLaw" />  
                    <span>Reference Case Law</span><br/><br/>
                    
                    <div id="refCaseLaw" style="display:none">
                    
                    	<span>Case Law</span>
                    	<input type="text" name="txt_caseLaw"/>
                    </div><!--/refCaseLaw-->
                   <br/><br/>
                   
                    <span>Body</span>
                    <textarea name="txt_body"></textarea><br/><br/>
                    <span>Audience</span>
                    <select name="ddl_Audience">
                    	<option>All</option>
                        <option>Friends Only</option>
                    </select><br/><br/>
                    
                    	<input type="submit" name="btn_createDiscus" value="Create Discussion"/>  
                    </form>                                   
               </div><!--/tab_createDiscus-->
               
                <div id="tab_manageDiscus" class="overflow"> 
                
				  <?php
				 	
					if(isset($_POST['lnk_delete']))
					{
						//code to execute when the delete button is clicked
						echo $_POST['id'];
					}	
					elseif(isset($_POST['lnk_edit']))
					{
						
						echo $_POST['author'] .  '<br />';
						//var_dump($_POST);
						echo '<input type="text" name=' . $_POST['id'] . ' value='. $_POST['id'] . ' />';
						echo $_POST['dateTimeofcreation'];
						echo $_POST['title'];
						echo $_POST['section'];
						echo $_POST['caselaw'];
						echo $_POST['body'];
						echo $_POST['audience'];
							
						//code to execute when the edit button is clicked
						 function valid($id, $author, $dateTimeCreated,$title,$section,$caselaw,$body,$audience, $error)
						 {
						 
						 if (!isset($error))
						 {
						 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
						 }
						
						echo 'hello world';
						 echo'<form action="" method="post">';
						 echo'<input type="hidden" name="id" value="'.$id.'"/>';
						
						 echo'<table pretty-table>
							<tr>
							  <td ><b>Edit Discussion </b></td>
							  </tr>
						 <tr>
							 <td ><b>Author</b></td>
							 <td><label>';
							  echo'<input type="text" name="txt_author" value="'.$author.'" />
							 </label></td>
						   </tr>
						
						   <tr>
							   <td >Date of Creation</td>
							   <td><label>';
								echo'<input type="text" name="txt_dateTimeCreated" value="'.$dateTimeCreated.'" />
							   </label></td>
						   </tr>
						
						   <tr>
							   <td >Title</td>
							   <td><label>';
								echo'<input type="text" name="txt_title" value="'.$title.'" />
							   </label></td>
						   </tr>
						   
						   <tr>
							   <td>Section</td>
							   <td><label>';
								echo'<input type="text" name="txt_section" value="'.$section.'" />
							   </label></td>
						   </tr>
						   
						   <tr>
							   <td >Case Law</td>
							   <td><label>';
								echo'<input type="text" name="txt_caselaw" value="'.$caselaw.'" />
							   </label></td>
						   </tr>
						   
						   <tr>
							   <td >Body</td>
							   <td><label>';
								echo'<textarea name="txt_body" >'.$body.'</textarea>
							   </label></td>
						   </tr>
						   
						   <tr>
							   <td >Audience</td>
							   <td><label>';
								echo'<select type="text" name="ddl_audience" >';
									echo'<option'; if($audience=="All"){echo"selected";} echo'>All</option>';
									echo'<option'; if($audience=="Friends Only"){echo"selected";} echo'>Friends Only</option>
								</select>
							   </label></td>
						   </tr>
						
						   <tr align="Right">
							   <td ><label>
								  <input type="submit" name="submit" value="Update Discussion">
							   </label></td>
							   </tr>
						</table>
						 </form>
						 </body>
						 </html>';
					
						 }
						
						 //include('config.php');
						 $db = Database::getDB();
						
						 if (isset($_POST['submit']))
						 {
						
						 if (is_numeric($_POST['id']))
						 {
						
						 $id = $_POST['id'];
						 $author = mysql_real_escape_string(htmlspecialchars($_POST['txt_author']));
						 $dateTimeCreated = mysql_real_escape_string(htmlspecialchars($_POST['txt_dateTimeCreated']));
						 $title = mysql_real_escape_string(htmlspecialchars($_POST['txt_title']));
						 $section = mysql_real_escape_string(htmlspecialchars($_POST['txt_section']));
						 $caselaw = mysql_real_escape_string(htmlspecialchars($_POST['txt_caselaw']));
						 $body = mysql_real_escape_string(htmlspecialchars($_POST['txt_body']));
						 $audience = mysql_real_escape_string(htmlspecialchars($_POST['ddl_audience']));
						
						
						 if ($author ==''||$dateTimeCreated==''||$title==''||$section==''||$caselaw==''||$body==''||$audience=='')
						 {
						
						 $error = 'ERROR: Please fill in all required fields!';
						
						
						valid($id, $author, $dateTimeCreated,$title,$section,$caselaw,$body,$audience, $error);
						 }
						 else
						 {
						//changed
						 $query="UPDATE discussions SET author='$author', dateTimeofcreation='$dateTimeCreated' ,title='$title', section='$section', caselaw='$caselaw', body='$body', audience='$audience' WHERE id='$id'"
						 or die(mysql_error());
						
						 header("Location: #tab_manageDiscus");//changed
						 }
						 }
						 else
						 {
						
						 echo 'Error!';
						 }
						 }
						 else
						
						 {
						
						 if (isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] > 0)
						 {
							$id = $_POST['id'];
							$db = Database::getDB();
							$query="SELECT * FROM discussions WHERE id=$id";					
							$result=$db->exec($query)
							or die(mysql_error());
							mysql_fetch_array($result);
				
						 
						// $result = mysql_query("SELECT * FROM discussions WHERE id=$id")
//						 or die(mysql_error());
//						 $row = mysql_fetch_array($result);
						
						 if($row)
						 {
						 $author = $row['author'];
						 $dateTimeCreated = $row['dateTimeofcreation'];
						 $title = $row['title'];
						 $section = $row['section'];
						 $caselaw = $row['caselaw'];
						 $body = $row['body'];
						 $audience = $row['audience'];
						
						 valid($id, $author, $dateTimeCreated,$title,$section,$caselaw,$body,$audience,'');
						 }
						 else
						 {
						 echo "No results!";
						 }
						 }
						 else
						
						 {
						 echo 'Error!';
						 }
						 }
				
						
					}
					else
					{
						//code to display all discussion information for current user
					  $currentUser=$_SESSION['firstname'].' '.$_SESSION['lastname'];
					  $db=Database::getDB();
					  $query= 'SELECT * FROM discussions WHERE author='."'".$currentUser."'";
					  $result = $db->query($query)
					  or die(mysql_error());
					  
					  echo "<table  class='pretty-table' >";
					  echo "<tr>
					  <th>Id</th>
					  <th>Author</th>
					  <th>Date of Created</th>
					  <th>Title</th>
					  <th>Section</th>
					  <th>Case Law</th>
					  <th>Body</th>
					  <th>Audience</th>
					  <th>Edit</th>
					  <th>Delete</th>
					  </tr>";
					  
					  while($row=$result->fetch())
					  {
									  
						echo "<tr>";
						echo '<td>' . $row['id'] . '</td>';
						echo '<td>' . $row['author'] . '</td>';
						echo '<td>' . $row['dateTimeofcreation'] . '</td>';
						echo '<td>' . $row['title'] . '</td>';
						echo '<td>' . $row['section'] . '</td>';
						echo '<td>' . $row['caselaw'] . '</td>';
						echo '<td>' . $row['body'] . '</td>';
						echo '<td>' . $row['audience'] . '</td>';
						
						//note the position of the form. Must be here to ensure that only the currently selected item ID is captured
						echo'<td>
						<form name="form_ManageDisc" action="#tab_manageDiscus" method="post"> 
						<input type="submit"  name="lnk_edit" value="Edit" /></td>';
						echo'<td><input type="submit" name="lnk_delete" value="Delete" />
						</td>'; 
						
						//hidden field to hold the value of currently selected item
						echo'<input type="hidden" name="id" value="'. $row['id'].'"/></td>';
						echo'<input type="hidden" name="author" value="'. $row['author'].'"/></td>';
						echo'<input type="hidden" name="dateTimeofcreation" value="'. $row['dateTimeofcreation'].'"/></td>';
						echo'<input type="hidden" name="title" value="'. $row['title'].'"/></td>';
						echo'<input type="hidden" name="section" value="'. $row['section'].'"/></td>';
						echo'<input type="hidden" name="caselaw" value="'. $row['caselaw'].'"/></td>';
						echo'<input type="hidden" name="body" value="'. $row['body'].'"/></td>';
						echo'<input type="hidden" name="audience" value="'. $row['audience'].'"/></td>';
						echo '</form> ';

						echo "</tr>";
					  	
					  }	
					  echo "</table>";  
					  
                        
                    } 
                   ?>
                 
                 
                 	
						
                                                 
              </div><!--/tab_manageDiscus-->
                
            </div><!--/tabs-->
            </div><!--/DiscussionsMain_content-->
            
            
            
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


    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
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
