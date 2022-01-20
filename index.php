<?php
require('functions.php');

$pika = new Pikachu('Pika');
$char = new Charmeleon('Char');

echo Pokemon::getPopulation(); 

echo '<br>' . $pika->attack($char, $pika->getAttacks()[0], $pika->getEnergyType());
echo '<br>' . $char->attack($pika, $char->getAttacks()[1], $char->getEnergyType());
echo '<br>' . $pika->attack($char, $pika->getAttacks()[0], $pika->getEnergyType());

echo Pokemon::getPopulation();
?>