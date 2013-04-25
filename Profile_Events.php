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
	if(isset($_POST['btn_createEvents']))
	{	//note that date of creation and author is pulled from current date and current users name
		$EvTitle =$_POST['txt_title'];
		$EvNameOfCreator=$_SESSION['firstname'].' '.$_SESSION['lastname'];
		$EvEmailOfCreator=$_POST['txt_email'];
		$EvDateOfEvent=$_POST['txt_date'];
		$EvDescription=$_POST['txt_description'];
		$EvVenue=$_POST['txt_venue'];
		$EvAudience=$_POST['ddl_audience'];
		$EvDateTimeOfCreation=date("Y-m-d H:i:s");
		
		
		$val=new Validation();
	$val->validateCreateEvents($EvTitle,$EvNameOfCreator,$EvEmailOfCreator,$EvDateOfEvent,$EvDescription,$EvVenue,$EvAudience, $EvDateTimeOfCreation);
		
	}
	
	
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

	<html class="no-js"> <!--<![endif]-->
    <head>
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
            
            
            
            <div id="EventsMain_content">
           	<!------ Tabs --------->
            <div id="tabs" class="overflow">
                <ul>
                    <li><a href="#tabs_createEvents">+ Create Events</a></li>
                    <li><a href="#tabs_manageEvents">Manage Events</a></li>
                    
                </ul>
                <div id="tabs_createEvents" class="overflow">
                <form action="Profile_Events.php" method="post">
                	<span>Title of Event</span>
                    <input type="text" name="txt_title"/><br/><br/>
                    <span>Email</span>
                    <input type="text" name="txt_email" /><br/><br/>
                    <span>Date of Event</span>
                    <input type="text" name="txt_date"/><br/><br/>
                    <span>Description</span>
                    <textarea name="txt_description"></textarea> <br/><br/>
                    <span>Venue</span>
                    <input type="text" name="txt_venue"/> <br/><br/>
                    <span>Audience</span>
                    <select name="ddl_audience">
                    	<option>All</option>
                        <option>Friends Only</option>
                    </select><br/><br/>
                    
                   <input type="submit" name="btn_createEvents" value="Create Events"/> 
                    
                   </form>
            
                </div>
                
                <div id="tabs_manageEvents">
                	 <?php
				 	
					if(isset($_POST['lnk_delete']))
					{
						
						
						$id = $_POST['id'];	
						$author = $_POST['author'];
						$dateTimeCreated = $_POST['dateTimeofcreation'];
						$title = $_POST['title'];
						$section= $_POST['section'];
						$caselaw = $_POST['caselaw'];
						$body = $_POST['body'];
						$audience = $_POST['audience'];
							
						 echo'<form action="" method="post">';
						 echo'<input type="hidden" name="id" value="'.$id.'"/>';
						
						 echo'<table class="pretty-table">
							<tr align="center">
							  <td colspan="2" style="color:blue"><b>Delete Event </b></td>
							  </tr>
							  
							   <tr>
							   <td><b>Title of Event</b></td>
							   <td><label>';
								echo'<input type="text" name="txt_title" value="'.$title.'" />
							   </label></td>
						   </tr>
						 <tr>
							 <td ><b>Creator Of Event</b></td>
							 <td><label>';
							  echo'<input type="text" name="txt_author" value="'.$author.'" />
							 </label></td>
						   </tr>
						
						   <tr>
							   <td ><b>Date of Event<b></td>
							   <td><label>';
								echo'<input type="text" name="txt_dateTimeCreated" value="'.$dateTimeCreated.'" />
							   </label></td>
						   </tr>
						
						  
						   
						   <tr>
							   <td ><b>Description</b></td>
							   <td><label>';
								echo'<textarea name="txt_body" >'.$body.'</textarea>
							   </label></td>
						   </tr>
						   
						   <tr>
							   <td ><b>Audience</b></td>
							   <td><label>';
								echo'<select type="text" name="ddl_audience" >';
									echo'<option'; if($audience=="All"){echo"selected";} echo'>All</option>';
									echo'<option'; if($audience=="Friends Only"){echo"selected";} echo'>Friends Only</option>
								</select>
							   </label></td>
						   </tr>
						
						   <tr align="Right">
						   <td></td>
							   <td >
								  <input type="submit" name="btn_DeleteDiscussion" value="Delete Discussion" onClick="confirmDelete">
							   </td>
							   </tr>
						</table>
						 </form>
						 </body>
						 </html>';
						 
						
					}	
					elseif(isset($_POST['lnk_edit']))
					{
											
						$id = $_POST['id'];	
						$author = $_POST['author'];
						$dateTimeCreated = $_POST['dateTimeofcreation'];
						$title = $_POST['title'];
						$section= $_POST['section'];
						$caselaw = $_POST['caselaw'];
						$body = $_POST['body'];
						$audience = $_POST['audience'];
							
						 echo'<form action="" method="post">';
						 echo'<input type="hidden" name="id" value="'.$id.'"/>';
						
						 echo'<table class="pretty-table">
							<tr align="center">
							  <td colspan="2" style="color:blue"><b>Edit Event </b></td>
							  </tr>
						 <tr>
							 <td ><b>Creator of Event</b></td>
							 <td><label>';
							  echo'<input type="text" name="txt_author" value="'.$author.'" />
							 </label></td>
						   </tr>
						
						   <tr>
							   <td ><b>Date of Creation<b></td>
							   <td><label>';
								echo'<input type="text" name="txt_dateTimeCreated" value="'.$dateTimeCreated.'" />
							   </label></td>
						   </tr>
						
						   <tr>
							   <td><b>Title</b></td>
							   <td><label>';
								echo'<input type="text" name="txt_title" value="'.$title.'" />
							   </label></td>
						   </tr>
						   
						   <tr>
							   <td ><b>Description</b></td>
							   <td><label>';
								echo'<textarea name="txt_body" >'.$body.'</textarea>
							   </label></td>
						   </tr>
						   
						   <tr>
							   <td ><b>Audience</b></td>
							   <td><label>';
								echo'<select type="text" name="ddl_audience" >';
									echo'<option'; if($audience=="All"){echo"selected";} echo'>All</option>';
									echo'<option'; if($audience=="Friends Only"){echo"selected";} echo'>Friends Only</option>
								</select>
							   </label></td>
						   </tr>
						
						   <tr align="Right">
						   <td></td>
							   <td >
								  <input type="submit" name="btn_updateDiscussion" value="Update Discussion">
							   </td>
							   </tr>
						</table>
						 </form>
						 </body>
						 </html>';
					
			
						
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
					  <th>Creator of Event</th>
					  <th>Date of Created</th>
					  <th>Title</th>
					  <th>Description</th>
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
