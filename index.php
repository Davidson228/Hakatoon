<?php
require 'vendor/autoload.php';
session_start();
unset($_SESSION['city']);

unset($_SESSION['place']);

$app = new \atk4\ui\App('On a trip around Latvia');
$app->initLayout('Centered');

$menu = $app->add('Menu');

$attractions = $menu->addMenu('Attractions');
$county = $attractions->addMenu('County');

 $kurzeme = $county->addMenu('Kurzeme');
    $ventspils = $kurzeme->addItem('Ventspils');
    $ventspils->link(['main','city'=>'Ventspils']);
    $liepaja = $kurzeme->addItem('Liepaja');
    $liepaja->link(['main','city'=>'Liepaja']);
    
 $vidzeme = $county->addMenu('Vīdzeme');
    $riga = $vidzeme->addItem('Rīga');
    $riga->link(['main','city'=>'Rīga']);
    $jurmala = $vidzeme->addItem('Jūrmala');
    $jurmala->link(['main','city'=>'Jūrmala']);

 $zemgale = $county->addMenu('Zemgale');
    $jelgava = $zemgale->addItem('Jelgava');
    $jelgava->link(['main','city'=>'Jelgava']);
    $bauska = $zemgale->addItem('Bauska');
    $bauska->link(['main','city'=>'Bauska']);

 $latgale = $county->addMenu('Latgale');
    $daugavpils = $latgale->addItem('Daugavpils');
    $daugavpils->link(['main','city'=>'Daugavpils']);
    $rezekne = $latgale->addItem('Rēzekne');
    $rezekne->link(['main','city'=>'Rēzekne']);



























































































/*
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Tour around Latvia');
$app->initLayout('Centered');
$menu = $app->add('Menu');

$attractions = $menu->addMenu('Tours');

$county = $attractions->addMenu('County');

$kurzeme = $county->addMenu('Kurzeme');
$zemgale = $county->addMenu('Zemgale');
$vidzeme = $county->addMenu('Vidzeme');
$latgale = $county->addMenu('Latgale');

$riga = $vidzeme->addMenu('Riga');
$liepaja = $kurzeme->addMenu('Liepaja');
//$ventspils = $kurzeme->addMenu('Ventspils');
$jurmala = $vidzeme->addMenu('Jurmala');
$daugavpils =$latgale->addMenu('Daugavpils');
$jelgava =$zemgale->addMenu('Jelgava');

$oldriga = $riga->add(['Button','Old Riga']);
$oldriga ->link(['oldriga1']);

$ventspils = $kurzeme->add(['Button','Ventspils']);
$ventspils->link(['ventspils1']);*/



/*$ventspils = $kurzeme->addMenu('Ventspils');
$liepaja = $kurzeme->addMenu('Liepaja');
$riga = $vidzeme->addMenu('Riga');
$jurmala = $vidzeme->addMenu('Jurmala');
$daugavpils = $zemgale->addMenu('Daugavpils');*/
