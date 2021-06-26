<?php
	$server = $_SERVER['SCRIPT_FILENAME'];
	$server = str_replace('index.php','',$server);
	header('Content-Type: image/png');
	$img = imagecreate(600,300);
// this is colors
	$img_bg1 = imagecolorallocate($img, 255,255,255);
	$img_bg2 = imagecolorallocate($img, 21,160,245);
	$img_bg3 = imagecolorallocate($img, 0,0,0);
	$img_tx1 = imagecolorallocate($img, 0,118,218);
// this is image background
	imagefilledrectangle($img, 0, 0, 600, 300, $img_bg1);
	imagefilledrectangle($img, 0, 155, 430, 125, $img_bg2);
// this is image text and font
	$text1 = 'Nexample';
	$font1 = $server.'tt0140m.ttf';
	$text2 = 'YouTube';
	$font2 = $server.'arialbd.ttf';
	$text3 = 'http://www.youtube/c/nexample';
	$font3 = $server.'arial.ttf';
	$text4 = 'Subscribe Now';
// this is image cteate With all system
	imagettftext($img, 80, 0, 60, 120, $img_tx1, $font1, $text1);
	imagettftext($img, 28, 0, 435, 155, $img_bg2, $font2, $text2);
	imagettftext($img, 20, 0, 20, 255, $img_bg3, $font3, $text3);
	imagettftext($img, 15, 0, 20, 148, $img_bg1, $font2, $text4);
imagepng($img);
imagedestroy($img);
?>

