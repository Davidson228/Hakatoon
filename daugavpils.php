<?php
require 'vendor/autoload.php';
session_start();
//$_SESSION['city']=$_GET['city'];
//$app = new \atk4\ui\App($_SESSION['city']);
$app = new \atk4\ui\App('Daugavpils');
$app->initLayout('Centered');
$img = 'http://img2.gorod.lv/images/news_item_in_cifs/pic/272791/big/Harkov2.jpg?v=1472212975';
$image = $app->add(['Image',$img]);
$button1=$app->add(['Button','BACK']);
$button1->link('index.php');
