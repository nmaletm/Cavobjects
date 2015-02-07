<?php

$gallery = new Gallery();

$i = 1;

$photos = array(
	new Photo('Spider/spider-1.jpg'),
	new Photo('Spider/spider-2.jpg'),
);
$object = new Object($i++, 'Spider', '25/12/2014', $photos);
$gallery->addObject($object);


$photos = array(
	new Photo('Balloon/ballon-1.jpg'),
	new Photo('Balloon/ballon-2.jpg'),
	new Photo('Balloon/ballon-3.jpg'),
	new Photo('Balloon/ballon-4.jpg'),
);
$object = new Object($i++, 'Ballon', '30/12/2014', $photos);
$gallery->addObject($object);


$photos = array(
	new Photo('Chair/chair-1.jpg'),
	new Photo('Chair/chair-2.jpg'),
	new Photo('Chair/chair-3.jpg'),
);
$object = new Object($i++, 'Chair', '06/01/2015', $photos);
$gallery->addObject($object);


$photos = array(
	new Photo('Bear/bear-1.jpg'),
	new Photo('Bear/bear-2.jpg'),
	new Photo('Bear/bear-3.jpg'),
);
$object = new Object($i++, 'Bear', '18/01/2015', $photos);
$gallery->addObject($object);


$photos = array(
	new Photo('Man-stand-up/man-stand-up-1.jpg'),
	new Photo('Man-stand-up/man-stand-up-2.jpg'),
	new Photo('Man-stand-up/man-stand-up-3.jpg'),
	new Photo('Man-stand-up/man-stand-up-4.jpg'),
);
$object = new Object($i++, 'Man (stand up)', '18/01/2015', $photos);
$gallery->addObject($object);


$photos = array(
	new Photo('Man-sit-down/man-sit-down-1.jpg'),
	new Photo('Man-sit-down/man-sit-down-2.jpg'),
);
$object = new Object($i++, 'Man (sit down)', '18/01/2015', $photos);
$gallery->addObject($object);


$photos = array(
	new Photo('Chairlift/chairlift-1.jpg'),
	new Photo('Chairlift/chairlift-2.jpg'),
	new Photo('Chairlift/chairlift-3.jpg'),
	new Photo('Chairlift/chairlift-4.jpg'),
);
$object = new Object($i++, 'Chairlift', '01/02/2015', $photos);
$gallery->addObject($object);


$photos = array(
	new Photo('Plane/plane-1.jpg'),
	new Photo('Plane/plane-2.jpg'),
	new Photo('Plane/plane-3.jpg'),
	new Photo('Plane/plane-4.jpg'),
	new Photo('Plane/plane-5.jpg'),
	new Photo('Plane/plane-6.jpg'),
);
$object = new Object($i++, 'Plane', '07/02/2015', $photos);
$gallery->addObject($object);