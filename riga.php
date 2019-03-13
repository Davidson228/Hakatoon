<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Rīga');
$app->initLayout('Centered');
$img = 'https://upload.wikimedia.org/wikipedia/commons/a/ad/National_Library_of_Latvia.jpg';
$image = $app->add(['Image',$img]);
$image->on('click',function($image){
  return new \atk4\ui\jsExpression('document.location = "lnb.php"');
});

$button1=$app->add(['Button','BACK']);
$button1->link('index');

/*require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('');
$app->initLayout('Centered');
$img = '';
$image = $app->add(['Image',$img]);
$image->on('click',function($image);*/
