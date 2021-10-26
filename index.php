<?php
require('functions.php');

$pika = new Pikachu('Pika'); //using the 'new' keyword a new instance of the corresponding class gets made
$char = new Charmeleon('Char');

echo($pika . '<br>' . $char);

echo Pokemon::getPopulation(); //using X::y you can call a static method

echo '<br>' . $pika->attack($char, $pika->attacks[0], $pika->energyType);
echo '<br>' . $char->attack($pika, $char->attacks[1], $char->energyType);
echo '<br>' . $pika->attack($char, $pika->attacks[0], $pika->energyType);

echo Pokemon::getPopulation();
?>