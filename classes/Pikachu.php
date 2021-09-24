<?php
class Pikachu extends Pokemon{
    public function __construct($name){
        $this->name = $name;
        $energyType = 'lightning';
        $hitPoints = 60;
        $health = 60;
        $attacks = ['electric ring', 'pika punch'];
        $weakness = ['fire', 1.5];
        $resistance = ['fighting', 20];

       parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
    }
}