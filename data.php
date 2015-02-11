<?php

$server = 'http://cavobjects.storn.es/';
if ($_GET['render']) {
	$server = 'http://nmaletm.github.io/Cavobjects/';
}

$gallery = new Gallery();

$i = 1;

$photos = array(
	new Photo('Spider/spider-1.jpg'),
	new Photo('Spider/spider-2.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Spider');
$object->setDate('25/12/2014');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$photos = array(
	new Photo('Balloon/ballon-1.jpg'),
	new Photo('Balloon/ballon-2.jpg'),
	new Photo('Balloon/ballon-3.jpg'),
	new Photo('Balloon/ballon-4.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Ballon');
$object->setDate('30/12/2014');
$object->setMaterials(array('cork stopper', 'cava wire', 'Trovit ball'));
$object->setTools(array('pliers', 'knife'));
$gallery->addObject($object);


$photos = array(
	new Photo('Chair/chair-1.jpg'),
	new Photo('Chair/chair-2.jpg'),
	new Photo('Chair/chair-3.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Chair');
$object->setDate('06/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$gallery->addObject($object);


$photos = array(
	new Photo('Bear/bear-1.jpg'),
	new Photo('Bear/bear-2.jpg'),
	new Photo('Bear/bear-3.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Bear');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$photos = array(
	new Photo('Man-stand-up/man-stand-up-1.jpg'),
	new Photo('Man-stand-up/man-stand-up-2.jpg'),
	new Photo('Man-stand-up/man-stand-up-3.jpg'),
	new Photo('Man-stand-up/man-stand-up-4.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Man (stand up)');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$photos = array(
	new Photo('Man-sit-down/man-sit-down-1.jpg'),
	new Photo('Man-sit-down/man-sit-down-2.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Man (sit down)');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$photos = array(
	new Photo('Chairlift/chairlift-1.jpg'),
	new Photo('Chairlift/chairlift-2.jpg'),
	new Photo('Chairlift/chairlift-3.jpg'),
	new Photo('Chairlift/chairlift-4.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Chairlift');
$object->setDate('01/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'cava cap blocker'));
$object->setTools(array('pliers', 'knife', 'pen', 'iron rasp'));
$gallery->addObject($object);


$photos = array(
	new Photo('Plane/plane-1.jpg'),
	new Photo('Plane/plane-2.jpg'),
	new Photo('Plane/plane-3.jpg'),
	new Photo('Plane/plane-4.jpg'),
	new Photo('Plane/plane-5.jpg'),
	new Photo('Plane/plane-6.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Plane');
$object->setDate('07/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper', 'Magnum stick', 'water bottle cap'));
$object->setTools(array('pliers', 'knife', 'pen', 'scissors'));
$gallery->addObject($object);

$photos = array(
	new Photo('Sailboat/sailboat-1.jpg'),
	new Photo('Sailboat/sailboat-2.jpg'),
	new Photo('Sailboat/sailboat-3.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Sailboat');
$object->setDate('08/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'toothpick'));
$object->setTools(array('pliers', 'knife', 'scissors', 'adhesive tape'));
$gallery->addObject($object);

$photos = array(
	new Photo('Bike/bike-1.jpg'),
	new Photo('Bike/bike-2.jpg'),
	new Photo('Bike/bike-3.jpg'),
	new Photo('Bike/bike-4.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Bike');
$object->setDate('08/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife'));
$gallery->addObject($object);

$photos = array(
	new Photo('Boat/boat-1.jpg'),
	new Photo('Boat/boat-2.jpg'),
	new Photo('Boat/boat-3.jpg'),
	new Photo('Boat/boat-4.jpg'),
);
$object = new Object($i++, $photos);
$object->setName('Boat');
$object->setDate('10/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife'));
$gallery->addObject($object);