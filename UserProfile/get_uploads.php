<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>

<body>
<?php
	$folder='jpegcam/uploadss/';
	$handle=opendir($folder);
	while(($file=readdir($handle)) !== false)
	{
		if($file!='.'&& $file!='..')
		{
			echo '<img src="'.$folder.'/'.$file.'" width="150" height="150"/>';
		}
	}
?>
</body>
</html>