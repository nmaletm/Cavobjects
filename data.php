<?php

$server = 'http://cavobjects.storn.es/';
if ($_GET['render']) {
	$server = 'http://nmaletm.github.io/Cavobjects/';
}

$gallery = new Gallery();

$i = 1;

$object = new Object($i++);
$object->initGallery('Spider/spider-%d.jpg', 2);
$object->setName('Spider');
$object->setDate('25/12/2014');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Balloon/ballon-%d.jpg', 2);
$object->setName('Ballon');
$object->setDate('30/12/2014');
$object->setMaterials(array('cork stopper', 'cava wire', 'Trovit ball'));
$object->setTools(array('pliers', 'knife'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Chair/chair-%d.jpg', 3);
$object->setName('Chair');
$object->setDate('06/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Bear/bear-%d.jpg', 3);
$object->setName('Bear');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Man-stand-up/man-stand-up-%d.jpg', 4);
$object->setName('Man (stand up)');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Man-sit-down/man-sit-down-%d.jpg', 2);
$object->setName('Man (sit down)');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Chairlift/chairlift-%d.jpg', 4);
$object->setName('Chairlift');
$object->setDate('01/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'cava cap blocker'));
$object->setTools(array('pliers', 'knife', 'pen', 'iron rasp'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Plane/plane-%d.jpg', 6);
$object->setName('Plane');
$object->setDate('07/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper', 'Magnum stick', 'water bottle cap'));
$object->setTools(array('pliers', 'knife', 'pen', 'scissors'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Sailboat/sailboat-%d.jpg', 3);
$object->setName('Sailboat');
$object->setDate('08/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'toothpick'));
$object->setTools(array('pliers', 'knife', 'scissors', 'adhesive tape', 'pen'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Bike/bike-%d.jpg', 4);
$object->setName('Bike');
$object->setDate('08/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Boat/boat-%d.jpg', 4);
$object->setName('Boat');
$object->setDate('10/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife'));
$gallery->addObject($object);


$object = new Object($i++);
$object->initGallery('Dog/dog-%d.jpg', 4);
$object->setName('Dog');
$object->setDate('11/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$object = new Object($i++, $photos);
$object->initGallery('Car/car-%d.jpg', 6);
$object->setName('Car');
$object->setDate('16/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pen'));
$gallery->addObject($object);


$object = new Object($i++, $photos);
$object->initGallery('Moto/moto-%d.jpg', 5);
$object->setName('Motorbike');
$object->setDate('19/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$gallery->addObject($object);


$object = new Object($i++, $photos);
$object->initGallery('Mouse/mouse-%d.jpg', 5);
$object->setName('Computer mouse');
$object->setDate('27/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$gallery->addObject($object);


$object = new Object($i++, $photos);
$object->initGallery('Keyboard/keyboard-%d.jpg', 3);
$object->setName('Computer keyboard');
$object->setDate('27/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$gallery->addObject($object);


$object = new Object($i++, $photos);
$object->initGallery('OldTv/old-tv-%d.jpg', 6);
$object->setName('Old television');
$object->setDate('27/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$gallery->addObject($object);