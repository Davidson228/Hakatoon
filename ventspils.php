<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Tour around Latvia');
$app->initLayout('Centered');

$image = $app->add(['Image','http://www.kurzeme.lv/data/objekti/8-26ratslaukums-gs-3008_2.jpg']);
$text = $app->add(['Text','']);

$back = $app->add(['Button','Another tour']);
$back ->link(['index']);
