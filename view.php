<?php

include "class/includes.php";
include "data.php";

$id = $_REQUEST['id'];
$isRender = $_GET['render'];

$object = $gallery->getObject($id);

$image = $server.$object->getMainPhoto()->getRenderPath(Photo::SIZE_NORMAL, $isRender);

$title = $object->getName() . ' cavobject';
$description = 'During family launch and dinners, I usually play with the Cava bottle cap. Here you can see the object '.$object->getName();
$url = $server.$object->getRenderPath($isRender);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?=$title?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
    <meta name="description" content="Pagina  de  Storn.es"/>
    <link href="http://www.storn.es/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <meta name="twitter:card" content="photo" />
    <meta name="twitter:site" content="@NestorMalet" />
    <meta name="twitter:creator" content="@NestorMalet" />
    <meta name="twitter:url" content="<?=$url?>" />
    <meta name="twitter:title" content="<?=$title?>" />
    <meta name="twitter:description" content="<?=$description?>" />
    <meta name="twitter:image" content="<?=$image?>" />
    <meta property="fb:admins" content="100001250275301" />
    <meta property="fb:app_id" content="363609260438242" />
    <meta property="og:url" content="<?=$url?>" />
    <meta property="og:title" content="<?=$title?>" />
    <meta property="og:site_name" content="Néstor Malet" />
    <meta property="og:description" content="<?=$description?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?=$image?>" />
    <meta property="og:locale" content="en_us" />
  </head>
    <body class="page-view">
       <h1 class="pageTitle"><?=$object->getName()?></h1>

<div class="large-12 columns" style="overflow: visible">
	<div class="polaroids large-block-grid-4 small-block-grid-2">
<?php
$photos = $object->getPhotos();

foreach ($photos as $photo) {

	echo "\t\t<div>\n";
	echo "\t\t<a href='".$photo->getRenderPath(Photo::SIZE_LARGE, $isRender)."'>\n";
	echo "\t\t\t<img alt='".$object->getName()."' src='".$photo->getRenderPath(Photo::SIZE_NORMAL, $isRender)."' />\n";
	echo "\t\t</a>\n";
	echo "\t\t</div>\n";
}
?>
	</div>
</div>
<div style="clear:both"></div>

<div class='textBlock'>
  <h3><?=$object->getName()?></h3>

<b title="The score of this Cavobject compared to the other ones (in my opinion)" class="tooltip-anchor">
  "Nestor's score":
  <i class="fa fa-info-circle"></i>
</b> 
<br>

<?php
$mark = $object->getMark()/2;
for($i = 1; $i <= 5; $i++) {
  echo "<i class='fa ";
  if (($i - 0.5) == $mark) {
    echo "fa-star-half-o";
  } else if($i <= $mark) {
    echo "fa-star";
  } else {
    echo "fa-star-o";
  }
  echo "'></i>";
}
echo '&nbsp;&nbsp; <small>('.$object->getMark()." / 10)</small>";
echo "\n";
?>
</div>
<div class='textBlock'>

<b title="The level of difficulty of this Cavobject compared to the other ones (in my opinion)" class="tooltip-anchor">
  Difficulty":
  <i class="fa fa-info-circle"></i>
</b> 
<br>
<?php
$difficulty = $object->getDifficulty()/2;
for($i = 1; $i <= 5; $i++) {
  echo "<i class='fa ";
  if (($i - 0.5) == $difficulty) {
    echo "fa-star-half-o";
  } else if($i <= $difficulty) {
    echo "fa-star";
  } else {
    echo "fa-star-o";
  }
  echo "'></i>";
}
echo '&nbsp;&nbsp; <small>('.$object->getDifficulty()." / 10)</small>";
echo "\n";
?>
</div>

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
  echo "<b>Used tools <i class='fa fa-wrench'></i> :</b><br>";
  echo $tools;
  echo "</div>\n";
}
?>

<div class='textBlock center'>
  <i class="fa fa-rocket"></i> Cavobjects - 
  <a href="http://www.nestor.cat" target="_blank"><i class="fa fa-user"></i> Néstor Malet</a> - 
  <?=$object->getDate();?>
</div>


<a href="<?=($isRender)?'index.html':'index.php'?>" class="backButton"><i class="fa fa-chevron-left"></i> Back</a>

<script>
$(function() {
  //$(document).tooltip();
  $(".tooltip-anchor").click(function () {
    var anchor = this;
    $(anchor).tooltip({ 
      position: { my: "left+15 center", at: "center+20 center" }
    });
    $(anchor).tooltip("open");
    setTimeout(function(){
      $(anchor).tooltip("destroy");
    }, 5*1000);
  });
});
</script>
    </body>
</html>


