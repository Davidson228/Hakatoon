<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Ventspils');
$app->initLayout('Centered');
$img = 'http://www.kurzeme.lv/data/objekti/8-26ratslaukums-gs-3008_2.jpg';
$image = $app->add(['Image',$img]);
//$image->on('click',function($image);
$button1=$app->add(['Button','BACK']);
$button1->link('index');
