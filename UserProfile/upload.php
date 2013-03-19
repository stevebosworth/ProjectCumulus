<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>web cam upload page</title>

</head>

<body>
<?php
	
	$folder = 'jpegcam/uploadss/';
	$filename = strtotime("now").'.jpg';
	$input_con=file_get_contents('php://input');
	$file_path = $folder.$filename;
	file_put_contents($file_path, $input_con);	
?>
</body>
</html>