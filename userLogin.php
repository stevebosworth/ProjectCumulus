<?php

function my_autoloader($class){
        require "classes/". $class . ".class.php";
    }

    spl_autoload_register('my_autoloader');

//setting an array for errors
$errors = array();

if(isset($_POST['hiddenfld'])){

    //setting the variables to be used
    $uname = trim(htmlentities($_POST['username']));
    $pword = trim(htmlentities($_POST['password']));

    //checking to ensure username and password are not empty
    if (empty($uname)){
        $errors[] = "Please enter your username";
    }

    if (empty($pword)){
        $errors[] = "Please enter your password";
    }

    if(!$errors){

        //salting and encryption
        $epword = sha1($pword);
        $salt = md5($uname);

        $passencrypt = $salt.$epword;

        //instance of the Login DB class
        $loginDB = new LoginDB();

        //executing the query
        $row = $loginDB->verifyLogin($uname, $passencrypt);

        $passDB = $row->getPassword();
        $accessDB = $row->getAccessLevel();
        $useridDB = $row->getUserID();

        //checking for password match
        if ($passencrypt == $passDB){

            //setting session variables for use in subsequent pages
            session_start();
            $_SESSION['user_id'] = $useridDB;
            $_SESSION['user'] = $uname;
            //access level by number, 1 being highest
            $_SESSION['access'] = $accessDB;

            header("Location:home.php");
        }
        else {
            echo "failure, invalid credentials.";
        }
    }

    else {
        echo $errors;
    }
}

//empty username if hidden field isn't set
else {
    $uname = "";
}

?>
<!DOCTYPE html>
<head>
    <?php include 'include/head.inc.php' ?>
    <title>Project Cumulus Login</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php include 'include/header.inc.php' ?>
        <!-- <div id="lgn_main">
            <form method="post" name="frm_login">
                <input type="text" name="email">
                <input type="password" name="pass">
                <button id="btn_login">Login</button>
            </form>
        </div> -->
        <div id="content_container">
            <div id="main_logo_title">
                <img src="img/icons/logo.png" alt="Project Cumulus Logo" class="logo_big">
                <h1>Login to Project Cumulus</h1>

        <div id="login">
            <form action="userLogin.php" method="POST">
                <input type="hidden" name="hiddenfld" value="1" />
                <div class="formControl">Username: <input class="inputStyle" type="text" name="username" placeholder="Username" value="<?php echo $uname; ?>" /></div>
                <div class="formControl">Password: <input class="inputStyle" type="password" name="password" placeholder="Password" /></div>
                <div class="formControl"><input class="btnStyle" type="submit" value="Submit" /></div>
            </form>
        </div>

        </div> <!-- /content_container -->

        <?php include 'include/footer.inc.php' ?>
    <?php include 'include/closer.inc.php' ?>
</body>
</html>
