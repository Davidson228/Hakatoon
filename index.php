<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('On a trip around Latvia');
$app->initLayout('Centered');
$menu = $app->add('Menu');

$attractions = $menu->addMenu('Attractions');

$county = $attractions->addMenu('County');

$kurzeme = $county->addMenu('Kurzeme');
$zemgale = $county->addMenu('Zemgale');
$vidzeme = $county->addMenu('Vīdzeme');
$latgale = $county->addMenu('Latgale');

$ventspils = $kurzeme->addMenu('Ventspils');
$liepaja = $kurzeme->addMenu('Ventspils');
$riga = $vidzeme->addMenu('Rīga');
$jurmala = $vidzeme->addMenu('Jūrmala');
$daugavpils = $zemgale->addMenu('Daugavpils');
