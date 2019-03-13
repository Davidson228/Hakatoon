<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('On a trip around Latvia');
$app->initLayout('Centered');
$menu = $app->add('Menu');

$image = $app->add(['Image','https://www.likealocalguide.com/media/cache/0c/07/0c071343953aed5a2c3f6fa47484482c.jpg']);
