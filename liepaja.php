<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Liepaja');
$app->initLayout('Centered');
$img = 'https://d6dyoorq84mou.cloudfront.net/uploads/page/primary_image/12375/pilseta_kopskats.jpg';
$image = $app->add(['Image',$img]);
/*$button1=$app->add(['Button','BACK']);
$button1->link('index.php');

$button2 = $app->add('Button','Another city');
$button2->link('index.php');

$button3 = $app->add('Button','Ekskursions');
$button3->link('ekskursions.php');

$button4 = $app->add('Button','Restaurants');*/
$button2 = $app->add(['Button','Change city']);
$button2->link('index.php');
