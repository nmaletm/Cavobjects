<?php


$server = 'http://cavobjects.storn.es/';
if ($_GET['render']) {
	$server = 'http://www.cavobject.com/';
}
$serverPublic = 'http://www.cavobject.com/';

$gallery = new Gallery();

$i = 1;

$object = new Object(1);
$object->initGallery('Spider/spider-%d.jpg', 2);
$object->setName('Spider');
$object->setDate('25/12/2014');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pen'));
$object->setMark(5);
$object->setDifficulty(4);
$gallery->addObject($object);


$object = new Object(2);
$object->initGallery('Balloon/ballon-%d.jpg', 2);
$object->setName('Ballon');
$object->setDate('30/12/2014');
$object->setMaterials(array('cork stopper', 'cava wire', 'Trovit ball'));
$object->setTools(array('pliers', 'knife'));
$object->setMark(7);
$object->setDifficulty(5);
$gallery->addObject($object);


$object = new Object(3);
$object->initGallery('Chair/chair-%d.jpg', 3);
$object->setName('Chair');
$object->setDate('06/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife'));
$object->setMark(6);
$object->setDifficulty(6);
$gallery->addObject($object);


$object = new Object(4);
$object->initGallery('Bear/bear-%d.jpg', 3);
$object->setName('Bear');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$object->setMark(2);
$object->setDifficulty(2);
$gallery->addObject($object);


$object = new Object(5);
$object->initGallery('Man-stand-up/man-stand-up-%d.jpg', 4);
$object->setName('Man (stand up)');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$object->setMark(4);
$object->setDifficulty(6);
$gallery->addObject($object);


$object = new Object(6);
$object->initGallery('Man-sit-down/man-sit-down-%d.jpg', 2);
$object->setName('Man (sit down)');
$object->setDate('18/01/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper'));
$object->setTools(array('pliers', 'knife', 'pen'));
$object->setMark(4);
$object->setDifficulty(6);
$gallery->addObject($object);


$object = new Object(7);
$object->initGallery('Chairlift/chairlift-%d.jpg', 4);
$object->setName('Chairlift');
$object->setDate('01/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'cava cap blocker'));
$object->setTools(array('pliers', 'knife', 'pen', 'iron rasp'));
$object->setMark(6);
$object->setDifficulty(8);
$gallery->addObject($object);


$object = new Object(8);
$object->initGallery('Plane/plane-%d.jpg', 6);
$object->setName('Plane');
$object->setDate('07/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'Magnum After Dinner paper', 'Magnum stick', 'water bottle cap'));
$object->setTools(array('pliers', 'knife', 'pen', 'scissors'));
$object->setMark(7);
$object->setDifficulty(6);
$gallery->addObject($object);


$object = new Object(9);
$object->initGallery('Sailboat/sailboat-%d.jpg', 3);
$object->setName('Sailboat');
$object->setDate('08/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire', 'toothpick'));
$object->setTools(array('pliers', 'knife', 'scissors', 'adhesive tape', 'pen'));
$object->setMark(3);
$object->setDifficulty(2);
$gallery->addObject($object);


$object = new Object(10);
$object->initGallery('Bike/bike-%d.jpg', 4);
$object->setName('Bike');
$object->setDate('08/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife'));
$object->setMark(7);
$object->setDifficulty(8);
$gallery->addObject($object);


$object = new Object(11);
$object->initGallery('Boat/boat-%d.jpg', 4);
$object->setName('Boat');
$object->setDate('10/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife'));
$object->setMark(3);
$object->setDifficulty(4);
$gallery->addObject($object);


$object = new Object(12);
$object->initGallery('Dog/dog-%d.jpg', 4);
$object->setName('Dog');
$object->setDate('11/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pen'));
$object->setMark(3);
$object->setDifficulty(4);
$gallery->addObject($object);


$object = new Object(13);
$object->initGallery('Car/car-%d.jpg', 6);
$object->setName('Car');
$object->setDate('16/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pen'));
$object->setMark(3);
$object->setDifficulty(4);
$gallery->addObject($object);


$object = new Object(14);
$object->initGallery('Moto/moto-%d.jpg', 5);
$object->setName('Motorbike');
$object->setDate('19/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$object->setMark(5);
$object->setDifficulty(8);
$gallery->addObject($object);


$object = new Object(15);
$object->initGallery('Windmill/windmill-%d.jpg', 4);
$object->setName('Windmill');
$object->setDate('23/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens','Magnum After Dinner paper'));
$object->setMark(5);
$object->setDifficulty(3);
$gallery->addObject($object);


$object = new Object(16);
$object->initGallery('Mouse/mouse-%d.jpg', 5);
$object->setName('Computer mouse');
$object->setDate('27/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$object->setMark(6);
$object->setDifficulty(1);
$gallery->addObject($object);


$object = new Object(17);
$object->initGallery('Keyboard/keyboard-%d.jpg', 3);
$object->setName('Computer keyboard');
$object->setDate('27/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$object->setMark(6);
$object->setDifficulty(1);
$gallery->addObject($object);


$object = new Object(18);
$object->initGallery('OldTv/old-tv-%d.jpg', 6);
$object->setName('Old television');
$object->setDate('27/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$object->setMark(8);
$object->setDifficulty(1);
$gallery->addObject($object);


$object = new Object(19);
$object->initGallery('Headphone/headphone-%d.jpg', 4);
$object->setName('Headphone');
$object->setDate('28/02/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife'));
$object->setMark(8);
$object->setDifficulty(2);
$gallery->addObject($object);


$object = new Object(20);
$object->initGallery('Laptop/laptop-%d.jpg', 4);
$object->setName('Laptop');
$object->setDate('01/03/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$object->setMark(7);
$object->setDifficulty(2);
$gallery->addObject($object);


$object = new Object(21);
$object->initGallery('Woman/woman-%d.jpg', 3);
$object->setName('Woman');
$object->setDate('01/03/2015');
$object->setMaterials(array('cork stopper', 'cava wire'));
$object->setTools(array('pliers', 'knife', 'pens'));
$object->setMark(1);
$object->setDifficulty(6);
$gallery->addObject($object);


$object = new Object(22);
$object->initGallery('Ketchup/ketchup-%d.jpg', 5);
$object->setName('Ketchup');
$object->setDate('05/03/2015');
$object->setMaterials(array('cork stopper'));
$object->setTools(array('pliers', 'knife', 'pens'));
$object->setMark(6);
$object->setDifficulty(4);
$gallery->addObject($object);


