<?php
*require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Jurmala');
$app->initLayout('Centered');
$img = 'https://www.latvia.travel/sites/default/files/editor/Jurmala/jurmala-beach-latvia-travel.jpg';
$image = $app->add(['Image',$img]);
$image->on('click',function($image);
