<?php
//require('functions.php');
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$pika = new Pikachu('Pika');
$char = new Charmeleon('Char');

echo($pika . '<br>' . $char . '<br>');

echo 'Aantal levende pokemon = ' . Pokemon::getPopulation();
echo '<br>' . $pika->attack($char, $pika->attacks[0], $pika->energyType);
?>