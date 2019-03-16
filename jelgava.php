<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Jelgava');
$app->initLayout('Centered');
$img = 'http://www.liaa.gov.lv/files/liaa/content/ENG/Business_Locations/007_ml.jpg';
$image = $app->add(['Image',$img]);
$button1=$app->add(['Button','BACK']);
$button1->link('index.php');
