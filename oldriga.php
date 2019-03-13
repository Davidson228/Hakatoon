<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('On a trip around Latvia');
$app->initLayout('Centered');

$image = $app->add(['Image','http://www.citariga.lv/images/vietas/peterabaznica_b.jpg']);
