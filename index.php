<?php

include "class/includes.php";
include "data.php";

$isRender = $_GET['render'];
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
    <body class="page-main">
       <h1 class="pageTitle">Cavobjects</h1>

<div class="large-12 columns" style="overflow: visible">
	<ul class="polaroids large-block-grid-4 small-block-grid-2">
<?php
$objects = $gallery->getObjectOrderDesc();
foreach ($objects as $object) {
  $path = 'view.php?id='.$object->getId();
  if ($isRender) {
    $path = 'view-'.$object->getId().'.html';
  }
	echo "\t\t<li>\n";
	echo "\t\t<a href='".$path."' title='".$object->getName()."'>\n";
	echo "\t\t\t<img alt='".$object->getName()."' src='".$object->getMainPhoto()->getRenderPath('thumbnail', $isRender)."' />\n";
	echo "\t\t</a>\n";
	echo "\t\t</li>\n";
}
?>
	</ul>
</div>
      <span class="storn-logo storn-logo-sticker"></span>

    </body>
</html>