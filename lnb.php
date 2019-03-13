<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('National library of Latvia');
$app->initLayout('Centered');

$header=$app->add(['Header','National library of Latvia']);

$text=$app->add(['Text','The National Library was founded on 29 August 1919, one year after independence, as the State Library. Its first chief librarian and bibliographer was Jānis Misiņš (1862-1944) who made his immense private collection the basis of the new library. Within a year, until 1920, the stocks had grown to 250,000 volumes. Starting in the same year, all publishers were obliged to hand in a deposit copy of their works. Since 1927, the Library has published the National Bibliography of Latvia.There were significant additions in 1939 and 1940, when the State Library took over many of the libraries and collections of the Baltic Germans, most of whom resettled to the Reich. Among these was a large part of the collection of the Society for History and Archaeology of Russias Baltic Provinces, est. 1834, the primary historical society of the Baltic Germans. In 1940, holdings encompassed 1.7 million volumes, so that they had to be stored in two different locations in the Old Town' ]);

$button=$app->add(['Button','Add to favourites']);
$button->link('favorit.php');

$button1=$app->add(['Button','BACK']);
$button1->link('riga');
