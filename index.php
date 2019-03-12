<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('On a trip around Latvia');
$app->initLayout('Centered');
$menu = $app->add('Menu');

$attractions = $menu->addMenu('Attractions');

$county = $attractions->addMenu('County');

$kurzeme = $county->addMenu('Kurzeme');
$zemgale = $county->addMenu('Zemgale');
$vidzeme = $county->addMenu('Vidzeme');
$latgale = $county->addMenu('Latgale');

$town = $attractions->addMenu('Town');

$riga = $town->addMenu('Riga');
$liepaja = $town->addMenu('Liepaja');
$ventspils = $town->addMenu('Ventspils');
$jurmala = $town->addMenu('Jurmala');
$daugavpils =$town->addMenu('Daugavpils');

/*$ventspils = $kurzeme->addMenu('Ventspils');
$liepaja = $kurzeme->addMenu('Liepaja');
$riga = $vidzeme->addMenu('Riga');
$jurmala = $vidzeme->addMenu('Jurmala');
$daugavpils = $zemgale->addMenu('Daugavpils');*/
