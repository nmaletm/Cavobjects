<?php
include "class/includes.php";

$photo = $_GET['photo'];
$mode = $_GET['mode'];

if (!$photo || !$mode) {
	die('photo and mode param must be set.');
}

switch ($mode) {
	case Photo::SIZE_THUMBNAIL:
		$height = 300;
		$width = 300;
		$crop = true;
		break;
	
	case Photo::SIZE_NORMAL:
		$height = 600;
		$width = 600;
		$crop = false;
		break;
	
	case Photo::SIZE_LARGE:
		$height = 1000;
		$width = 1000;
		$crop = false;
		break;

	default:
		die('mode must be valid');
		break;
}

$realFile = 'image-objects/'.$photo;

$image = resizeImage($realFile, $width, $height, $crop);

header('Content-Type: image/jpeg');
imagejpeg($image);

imagedestroy($image);

function resizeImage($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);

    $src = imagecreatefromjpeg($file);

    $r = $width / $height;
    if ($crop) {
		if( $height > $width ){
			$limiting_dim = $width;
		}else{
			$limiting_dim = $height;
		}
        $newwidth = $w;
        $newheight = $h;

		$positionW = ($width-$limiting_dim)/2;
		$positionH = ($height-$limiting_dim)/2;
		$height = $width = $limiting_dim;
    } else {
    	$positionW = $positionH = 0;
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $dst = imagecreatetruecolor($newwidth, $newheight);
	imagecopyresampled($dst, $src, 0, 0, $positionW, $positionH, $newwidth, $newheight, $width, $height);

    return $dst;
}
