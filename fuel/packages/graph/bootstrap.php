<?php
// Add namespace
Autoloader::add_namespace('Graph', __DIR__.'/');

// Add as core namespace
Autoloader::add_core_namespace('Graph');

// Add as core namespace and prefix to overwrite core classes.
//Autoloader::add_core_namespace('Mypackage', true);

// And add the classes

Autoloader::add_classes(array(
    'Graph\\Bargraph' => __DIR__.'/classes/bargraph.php',
    'Graph\\Piechart' => __DIR__.'/classes/piechart.php',
));
?>