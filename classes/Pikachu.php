<?php
class Pikachu extends Pokemon{
    public function __construct($name){
        $this->name = $name;
        $energyType = new EnergyType('lightning', 20);
        $hitPoints = 60;
        $health = 60;
        $attacks = [new Attack('electric ring', 50), new Attack('pika punch', 20)];
        $weakness = new Weakness('fire', 1.5);
        $resistance = new Resistance('fighting', 20);

       parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
    }
}