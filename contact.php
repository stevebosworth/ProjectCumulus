<!doctype html>
<html>
    <head>
    	<?php include 'include/head.inc.php' ?>
        <title>Contact Project Cumulus</title>
        <link type="text/css" rel="stylesheet" href="css/contact.css" />
        <!-- Created by Chris Voorberg - April 23, 2013 -->
    </head>
    <body>
    	<?php include 'include/header.inc.php' ?>
    	<?php //include 'include/search_engine.inc.php' ?>
    	<div id="contact_form">

    		<h2>We LOVE Feedback!</h2>
    		<h3>Please enter your question or comment and information below!</h3>
    		<!-- Form to collect information, submits to the database -->
    		<form action="include/process_contact.inc.php" method="POST">
    			<table>
    				<tr>
    					<td>First Name: </td>
    					<td><input type="text" name="firstname" /></td>
    				</tr>
    				<tr>
    					<td>Last Name: </td>
    					<td><input type="text" name="lastname" /></td>
    				</tr>
    				<tr>
    					<td>Email: </td>
    					<td><input type="text" name="email" /></td>
    				</tr>
    				<tr>
    					<td>Confirm Email: </td>
    					<td><input type="text" name="emailconf" /></td>
    				</tr>
    				<tr>
    					<td>Phone (Optional): </td>
    					<td><input type="text" name="phone" /></td>
    				</tr>
    				<tr>
    					<td>Message: </td>
    					<td><textarea name="message" cols="40" rows="5"></textarea><p>Limit of 500 characters.</p></td>
    				</tr>
    				<tr>
    					<td></td>
    					<td><input type="submit" value="Submit!" /></td>
    				</tr>
    			</table>
    		</form>
    	</div>
        <?php include 'include/footer.inc.php' ?>
        <?php include 'include/closer.inc.php' ?>
    </body>
</html>