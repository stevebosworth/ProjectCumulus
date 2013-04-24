<?php
//includes
require_once 'createDiscussion_db.class.php';
//require_once('database.class.php');
class Validation
{
	//validation for login
	public function validateLogin($reLoginUrl, $profileHomeUrl)
	{
		//Assign data from users input
		  $email=$_POST['txt_email'];
		  $password=$_POST['txt_password'];

		//Regular Expression
		$patternEmail = "(^[\w\.-]+(\+[\w-]*)?@([\w-]+\.)+[\w-]+$)";
		
		if (empty($_POST['txt_email'])||!preg_match($patternEmail, $_POST['txt_email']))
		{
			//redirect to the re-login page
			header($reLoginUrl);
			
		}
		elseif(empty($_POST['txt_password']))
		{
			//redirect to the re-login page
			header($reLoginUrl);
		}
		else
		{
			$myDBQuery=LoginDB::myLoginDB($email,$password);
			if(empty($myDBQuery))
			{
				//redirect to the re-login page
				header($reLoginUrl);
			}
			else
			{
				// create a login session
				session_start(); 
		 
			   // set the session variables
				$_SESSION['firstname'] = $myDBQuery['firstname']; 
				$_SESSION['lastname'] = $myDBQuery['lastname'];
				$_SESSION['email'] = $myDBQuery['email'];
				$_SESSION['password'] = $myDBQuery['password'];
				$_SESSION['photourl'] = $myDBQuery['photourl'];
				$_SESSION['qualification'] = $myDBQuery['qualification'];
				$_SESSION['location'] = $myDBQuery['location'];
				$_SESSION['bio'] = $myDBQuery['bio'];
				$_SESSION['regdate'] = $myDBQuery['regdate'];
				
				header($profileHomeUrl);
			}
			
		
		}
	}
	
	
	//validation for create discussion page
	public function validateCreateDiscusn($disAuthor,$dateTimeCreated,$disTitle,$disSection,$disCaseLaw,$disBody,$disAudience)
	{
		
		if (empty($disTitle))
		{
	
			echo'Empty oh';
			
		}
		elseif(empty($disSection))
		{
			header($reLoginUrl);
		}
		elseif(empty($disCaseLaw) && isset($_POST['cbx_refCaseLaw']))
		{
			header($reLoginUrl);
		}
		elseif(empty($disBody))
		{
			header($reLoginUrl);
		}
		elseif(empty($disAudience))
		{
			header($reLoginUrl);
		}
		else
		{
			
			$cd=new createDiscDB($disAuthor,$dateTimeCreated,$disTitle,$disSection,$disCaseLaw,$disBody,$disAudience);
			
			$Author =$cd->getAuthor();
			$TimeCreated=$cd->getDateTimeCreated();
			$Title=$cd->getTitle();
			$Section=$cd->getSection();
			$CaseLaw=$cd->getCaseLaw();
			$Body=$cd->getBody();
			$Audience=$cd->getAudience();
			
			$db = Database::getDB();
			$query="INSERT INTO discussions(author, dateTimeofcreation, title, section, caselaw, body, audience) 
			VALUES('$Author', '$TimeCreated', '$Title', '$Section', '$CaseLaw', '$Body', '$Audience')";
			$result=$db->exec($query);
			
			//check that insert was successful
			if(!$result )
			{
				//die('Could not enter data: ' . mysql_error());
				echo '<script type="text/javascript"> window.onload=function(){alert("Discussion could not be created. Please check your input");}</script>';
			}
			else
			{
				echo '<script type="text/javascript"> window.onload=function(){alert("Discussion was successfully created.");}</script>'; 
			}
		}
	}
	
	
	
	//validation for create events page
	//public function validateCreateDiscusn($Title,$nameOfCreator,$emailOfCreator,$dateOfEvent,$description,$venue,$audience, $dateTimeOfCreation)
//	{
//		
//		if (empty($Title))
//		{
//			
//			echo'Empty oh';
//			
//		}
//		elseif(empty($nameOfCreator))
//		{
//			//redirect to the re-login page
//			header($reLoginUrl);
//		}
//		elseif(empty($emailOfCreator))
//		{
//			//redirect to the re-login page
//			header($reLoginUrl);
//		}
//		elseif(empty($dateOfEvent))
//		{
//			//redirect to the re-login page
//			header($reLoginUrl);
//		}
//		elseif(empty($description))
//		{
//			//redirect to the re-login page
//			header($reLoginUrl);
//		}
//		elseif(empty($venue))
//		{
//			//redirect to the re-login page
//			header($reLoginUrl);
//		}
//		elseif(empty($audience))
//		{
//			//redirect to the re-login page
//			header($reLoginUrl);
//		}
//		elseif(empty($dateTimeOfCreation))
//		{
//			//redirect to the re-login page
//			header($reLoginUrl);
//		}
//		else
//		{
//			
//			$cd=new createDiscDB($disAuthor,$dateTimeCreated,$disTitle,$disSection,$disCaseLaw,$disBody,$disAudience);
//			
//			$Author =$cd->getAuthor();
//			$TimeCreated=$cd->getDateTimeCreated();
//			$Title=$cd->getTitle();
//			$Section=$cd->getSection();
//			$CaseLaw=$cd->getCaseLaw();
//			$Body=$cd->getBody();
//			$Audience=$cd->getAudience();
//			
//			$db = Database::getDB();
//			$query="INSERT INTO discussions(author, dateTimeofcreation, title, section, caselaw, body, audience) 
//			VALUES('$Author', '$TimeCreated', '$Title', '$Section', '$CaseLaw', '$Body', '$Audience')";
//			$result=$db->exec($query);
//			
//			//check that insert was successful
//			if(!$result )
//			{
//				//die('Could not enter data: ' . mysql_error());
//				echo '<script type="text/javascript"> window.onload=function(){alert("Discussion could not be created. Please check your input");}</script>';
//			}
//			else
//			{
//				echo '<script type="text/javascript"> window.onload=function(){alert("Discussion was successfully created.");}</script>'; 
//			}
//		}
//	}
	
	
	
}

?>