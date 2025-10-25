<?php
require_once('inc/func.inc.php');

/**  setup  **/
$dirNum	= 0;
$imgDir	= "img/munising2012"; 		// image directory
$imgSub	= false;		// include sub directories when gathering images?
$imgId	= "lgImage"; 	// id tag for images
if ($dirNum == 0) $imgDir = "img/munising2012"; 
if ($_POST["Cedarville"]) $imgDir = "img/cedarville2012";
if ($_POST["Munising"]) $imgDir = "img/munising2012";
if ($_POST["Drummond"]) $imgDir = "img/drummond2012";
if ($_POST["Newberry"]) $imgDir = "img/newberry2012";
$getImg = lsDir($imgDir,$imgSub); // gather images
$numImgs = count($getImg); // count images
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<xhtml>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Photos 2012</title>
		<link rel="stylesheet" href="css/master.css" type="text/css" media="screen" charset="utf-8">
		<!--[if lt IE 7]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" charset="utf-8">
		<![endif]-->
	</head>
	<body>
		<script type="text/javascript" charset="utf-8">
			var NumberOfImages = <?php echo $numImgs?>; var img = new Array(NumberOfImages); var txt = new Array(NumberOfImages); var imgNumber = 0;   

			<?php $i=0; foreach ($getImg as $image): ?>
				img[<?php echo $i?>] = "<?php echo $image?>";
				txt[<?php echo $i?>] = "<?php echo $i+1?>";
			<?php $i++; endforeach; ?>
		
			/* no need to change, unless you're a hacker */
			if (document.images) { preload_image_object = new Image(); var i = 0; for(i=0; i<=<?php echo $numImgs-1?>; i++) preload_image_object.src = img[i]; }
			function NextImage() { imgNumber++; if (imgNumber == NumberOfImages) imgNumber = 0; document.getElementById("<?php echo $imgId?>").src = img[imgNumber]; document.getElementById('details').innerHTML = txt[imgNumber]; }
			function PreviousImage() { imgNumber--; if (imgNumber < 0) imgNumber = NumberOfImages - 1; document.getElementById("<?php echo $imgId?>").src = img[imgNumber]; document.getElementById('details').innerHTML = txt[imgNumber]; }
		</script>
			<!-- everything's stored within this div -->
<table>
	<tr>
		<td>
			<div id="content">
			<!-- png corners (gives the appearance of rounded corners) -->
			<div class="corners">
				<div class="left_top"></div>
				<div class="right_top"></div>
				<div class="left_bottom"></div>
				<div class="right_bottom"></div>
			</div>
			<!-- next/previous arrows -->
			<div class="controls">
				<a class="previous" href="#prev" onclick="PreviousImage();return false;" title="Previous Photo">Previous Photo</a>
				<a class="next" href="#next" onclick="NextImage();return false;" title="Next Photo">Next Photo</a>
			</div>
			<!-- image details - in this case, the image number -->
			<div class="details_bg">
				<div id="details">
					1
				</div>
			</div>
			<div class="watermark">
					Photos by Steve King
			</div>
			<!-- image -->
			<div class="photo">
				<img src="<?php echo $getImg[0]?>" id="<?php echo $imgId?>" width="900" height="600" alt="" />
			</div>
			</div>
		</td>
		<td>
			<form name='cart' method='post' action='index.php'>
			<table>
				<tr><td>	
					<input type='submit' name='Munising' value='Munising' />
				</td></tr>
				<tr><td>
					<input type='submit' name='Cedarville' value='Cedarville' />
				</td></tr>
				<tr><td>	
					<input type='submit' name='Newberry' value='Newberry' />
				</td></tr>
				<tr><td>
					<input type='submit' name='Drummond' value='Drummond Island' />
				</td></tr>
			</table>
		</td>
	</tr>
</table>
		
	</body>
</html>

<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>