<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Jelgava');
$app->initLayout('Centered');
$img = 'http://www.infotop.lv/uploads/img/articles/large/%D0%B0%D1%8B%D1%86%D0%B0%D1%8B%D1%84%D0%B0%D1%8B%D0%B0%D1%84%D1%8B%D0%B0%D1%8B%D1%84%D0%B0%D1%84%D1%8B%D0%B0_946231165.jpg';
$image = $app->add(['Image',$img]);
$button1=$app->add(['Button','BACK']);
$button1->link('index.php');
