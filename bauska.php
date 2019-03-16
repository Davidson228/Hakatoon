<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Bauska');
$app->initLayout('Centered');
$img = 'https://upload.wikimedia.org/wikipedia/commons/4/4e/3_Bauskas-pils-9apr04.jpg';
$image = $app->add(['Image',$img]);
$button1=$app->add(['Button','BACK']);
$button1->link('index.php');
