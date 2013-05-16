<?php
//requiring class files for login
require_once 'classes/Dbconn.class.php';

if(isset($_POST['hiddenfld'])){

$uname = trim(htmlentities($_POST['username']));
$pword = trim(htmlentities($_POST['password']));
$access = trim(htmlentities($_POST['access']));

$epword = sha1($pword);
$salt = md5($uname);

$passencrypt = $salt.$epword;

$db = Dbconn::getDB();
$sql = "INSERT INTO users (username, password, access_level) VALUES ('$uname', '$passencrypt', $access)";
$db->query($sql);
echo "Success!";
}
else {
    $uname = "";
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>APT Suites Login</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

        <div id="logHead">
          	<h1>Create a New User</h1>
        </div>
    	<div id="login">
	        <form action="createUser.php" method="POST">
                <input type="hidden" name="hiddenfld" value="1" />
	        	<div class="formControl">Username: <input class="inputStyle" type="text" name="username" placeholder="Username" value="<?php echo $uname; ?>" /></div>
	        	<div class="formControl">Password: <input class="inputStyle" type="password" name="password" placeholder="Password" /></div>
                <div class="formControl">Access Level: <input class="inputStyle" type="text" name="access" placeholder="Access Level" /></div>
	        	<div class="formControl"><input class="btnStyle" type="submit" value="Submit" /></div>
	        </form>
    	</div>
        <script src="js/main.js"></script>
    </body>
</html>