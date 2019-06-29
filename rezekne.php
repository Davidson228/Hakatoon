<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Rezekne');
$app->initLayout('Centered');
$img = 'https://baltnews.lv/images/102233/63/1022336310.jpg';
$image = $app->add(['Image',$img]);
/*$button1=$app->add(['Button','BACK']);
$button1->link('index.php');*/
$button2 = $app->add(['Button','Change city']);
$button2->link('index.php');
