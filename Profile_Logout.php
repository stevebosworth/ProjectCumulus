<?php
//logout by destroying session and redirect to login page
		session_start();
		session_unset();
		session_destroy();
		header("location:include/profile_includes/Profile_LoginErrorTryTillLoginSuccessful.inc.php");

?>
