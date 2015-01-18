<?php

$gallery = new Gallery();


$photos = array(
	new Photo('Spider/spider-1.jpg'),
	new Photo('Spider/spider-2.jpg'),
);
$object = new Object(1, 'Spider', '25/12/2014', $photos);
$gallery->addObject($object);



$photos = array(
	new Photo('Balloon/ballon-1.jpg'),
	new Photo('Balloon/ballon-2.jpg'),
	new Photo('Balloon/ballon-3.jpg'),
);
$object = new Object(2, 'Ballon', '30/12/2014', $photos);
$gallery->addObject($object);

$photos = array(
	new Photo('Chair/chair-1.jpg'),
	new Photo('Chair/chair-2.jpg'),
	new Photo('Chair/chair-3.jpg'),
);
$object = new Object(3, 'Chair', '06/01/2015', $photos);
$gallery->addObject($object);

$photos = array(
	new Photo('Bear/bear-1.jpg'),
	new Photo('Bear/bear-2.jpg'),
	new Photo('Bear/bear-3.jpg'),
);
$object = new Object(4, 'Bear', '18/01/2015', $photos);
$gallery->addObject($object);

$photos = array(
	new Photo('Man-stand-up/man-stand-up-1.jpg'),
	new Photo('Man-stand-up/man-stand-up-2.jpg'),
	new Photo('Man-stand-up/man-stand-up-3.jpg'),
	new Photo('Man-stand-up/man-stand-up-4.jpg'),
);
$object = new Object(5, 'Man (stand up)', '18/01/2015', $photos);
$gallery->addObject($object);

$photos = array(
	new Photo('Man-sit-down/man-sit-down-1.jpg'),
	new Photo('Man-sit-down/man-sit-down-2.jpg'),
);
$object = new Object(6, 'Man (sit down)', '18/01/2015', $photos);
$gallery->addObject($object);

