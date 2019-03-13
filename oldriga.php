<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('On a trip around Latvia');
$app->initLayout('Centered');

$image = $app->add(['Image','https://www.latvia.travel/sites/default/files/styles/lightbox/public/tourism_sight/riga-old-town-latvia-travel_10.jpg?itok=Dc93KQ2-']);
