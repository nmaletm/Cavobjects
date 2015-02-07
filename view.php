<?php

include "class/includes.php";
include "data.php";

$id = $_REQUEST['id'];
$isRender = $_GET['render'];

$object = $gallery->getObject($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Cavobjects Storn.es</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
    <meta name="description" content="Pagina  de  Storn.es"/>
    <link href="http://www.storn.es/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="http://tools.storn.es/estil.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
  </head>
    <body class="page-view">
       <h1 class="pageTitle"><?=$object->getName()?></h1>

<div class="large-12 columns" style="overflow: visible">
	<ul class="polaroids large-block-grid-4 small-block-grid-2">
<?php
$photos = $object->getPhotos();

foreach ($photos as $photo) {

	echo "\t\t<li>\n";
	echo "\t\t<a href='".$photo->getRenderPath(Photo::SIZE_LARGE, $isRender)."'>\n";
	echo "\t\t\t<img alt='".$object->getName()."' src='".$photo->getRenderPath(Photo::SIZE_NORMAL, $isRender)."' />\n";
	echo "\t\t</a>\n";
	echo "\t\t</li>\n";
}
?>
	</ul>
</div>
<div style="clear:both"></div>

<?php
$materials = $object->getMaterialsString();
if ($materials) {
  echo "<div class='textBlock'>";
  echo "<b>Used materials:</b><br>";
  echo $materials;
  echo "</div>\n";
}
?>

<?php
$tools = $object->getToolsString();
if ($tools) {
  echo "<div class='textBlock'>";
  echo "<b>Used tools:</b><br>";
  echo $tools;
  echo "</div>\n";
}
?>

<div class='textBlock'>
  <a href="http://www.nestor.cat" target="_blank">Néstor Malet</a> - <?=$object->getDate();?>
</div>
      <a href="<?=($isRender)?'index.html':'index.php'?>" class="backButton">&lt; Back</a>

    </body>
</html>


