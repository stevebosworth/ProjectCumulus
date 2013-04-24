<?php

require_once 'classes/Dbconn.class.php';
require_once 'classes/contact.class.php';
require_once 'classes/contact_db.class.php';

//storing the contact array in $list
$ContactDB = new ContactDB();
$list = $ContactDB->getContacts();
?>

<!doctype html>
<html>
    <head>
    	<?php include 'include/head.inc.php' ?>
        <title>Project Cumulus - View Contact List</title>
        <link type="text/css" rel="stylesheet" href="css/contact.css" />
        <!-- Created by Chris Voorberg - April 23, 2013 -->
    </head>
    <body>
    	<?php include 'include/header.inc.php' ?>
    	<?php //include 'include/search_engine.inc.php' ?>
    	<div id="contact_list">

    		<h2>Below is a List of Contacts and their Inquiries</h2>
    		
    			<!-- echoing information from the list array -->
    			<?php foreach ($list as $l) { ?>
    			<div class="contact">
    				<h4><?= $l->getFirstname()." ".$l->getLastname(); ?></h4>
    				<table id="contactview">
    					<tr>
    						<td>Email: </td>
    						<td><?= $l->getEmail() ?></td>
    					</tr>
    					<tr>
    						<td>Phone: </td>
    						<td><?= $l->getPhone() ?></td>
    					</tr>
    					<tr>
    						<td>Message: </td>
    						<td><?= $l->getMessage() ?></td>
    					</tr>
    				</table>
                    <div class=""></div>
    			</div>
    			<?php } ?>

    	</div>
        <?php include 'include/footer.inc.php' ?>
        <?php include 'include/closer.inc.php' ?>
    </body>
</html>