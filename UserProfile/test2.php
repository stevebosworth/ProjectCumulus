<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <!-- All JQuery file links -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="http://use.edgefonts.net/arvo.js"></script>
    
   
    <script src="pictureVideo_files/prettify.js"></script>
    <script src="pictureVideo_files/jquery-1.js"></script>
    <script src="pictureVideo_files/jquery.js"></script>
    <script src="pictureVideo_files/ga.js"></script>
    <script src="pictureVideo_files/default.js"></script>
    <script src="pictureVideo_files/likebox_data/v-Ac8iJHonZ.js"></script>
    <script src="jQuery-webcam-master/jquery.webcam.js"></script>
    
    <!--All Javascript file links -->
    <script src="js/profile.js" type="text/javascript"></script>
    
     <!-- All CSS file links -->
    <link type="text/css" rel="stylesheet" href="pictureVideo_files/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/profile1.css"/>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>    
    <link rel="stylesheet" href="css/normalize.css">
    
<script language="javascript">
$(function() {

	var pos = 0, ctx = null, saveCB, image = [];

	var canvas = document.createElement("canvas");
	canvas.setAttribute('width', 320);
	canvas.setAttribute('height', 240);
	
	if (canvas.toDataURL) {

		ctx = canvas.getContext("2d");
		
		image = ctx.getImageData(0, 0, 320, 240);
	
		saveCB = function(data) {
			
			var col = data.split(";");
			var img = image;

			for(var i = 0; i < 320; i++) {
				var tmp = parseInt(col[i]);
				img.data[pos + 0] = (tmp >> 16) & 0xff;
				img.data[pos + 1] = (tmp >> 8) & 0xff;
				img.data[pos + 2] = tmp & 0xff;
				img.data[pos + 3] = 0xff;
				pos+= 4;
			}

			if (pos >= 4 * 320 * 240) {
				ctx.putImageData(img, 0, 0);
				$.post("/upload.php", {type: "data", image: canvas.toDataURL("image/png")});
				pos = 0;
			}
		};

	} else {

		saveCB = function(data) {
			image.push(data);
			
			pos+= 4 * 320;
			
			if (pos >= 4 * 320 * 240) {
				$.post("/upload.php", {type: "pixel", image: image.join('|')});
				pos = 0;
			}
		};
	}

	$("#webcam").webcam({

		width: 320,
		height: 240,
		mode: "callback",
		swffile: "/download/jscam_canvas_only.swf",

		onSave: saveCB,

		onCapture: function () {
			webcam.save();
		},

		debug: function (type, string) {
			console.log(type + ": " + string);
		}
	});

});
</script>
</head> 


<body>

			<div id="webcam">
			</div>
			
</body>
</html>