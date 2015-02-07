<?php

$photo = $_GET['photo'];
$mode = $_GET['mode'];

if (!$photo || !$mode) {
	die('photo and mode param must be set.');
}

switch ($mode) {
	case 'thumbnail':
		$height = 300;
		$width = 300;
		break;
	
	case 'big':
		$height = 600;
		$width = 600;
		break;

	default:
		die('mode must be valid');
		break;
}

$realFile = 'image-objects/'.$photo;

$image = resizeImage($realFile, $width, $height, false);

header('Content-Type: image/jpeg');
imagejpeg($image);

imagedestroy($image);

function resizeImage($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
}