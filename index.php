<?php
require('functions.php');

$pika = new Pikachu('Pika'); //using the 'new' keyword a new instance of the corresponding class gets made
$char = new Charmeleon('Char');

echo Pokemon::getPopulation(); //using X::y you can call a static method

echo '<br>' . $pika->attack($char, $pika->getAttacks()[0], $pika->getEnergyType());
echo '<br>' . $char->attack($pika, $char->getAttacks()[1], $char->getEnergyType());
echo '<br>' . $pika->attack($char, $pika->getAttacks()[0], $pika->getEnergyType());

echo Pokemon::getPopulation();
?>