<?php
//require('functions.php');
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

//$lightning = new EnergyType('lightning', 10);
//$pokemon = new Pokemon('test', $lightning);
$pikachu = new Pikachu('Jan');

//echo($lightning);
//echo($pokemon);
echo($pikachu);
?>