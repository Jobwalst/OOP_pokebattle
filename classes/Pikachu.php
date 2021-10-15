<?php
class Pikachu extends Pokemon{ //using X extends Y inherits all properties from the Y class
    public function __construct($name){
        $energyType = new EnergyType('lightning', 20);
        $hitPoints = 60;
        $attacks = [new Attack('electric ring', 50), new Attack('pika punch', 20)];
        $weakness = new Weakness('fire', 1.5);
        $resistance = new Resistance('fighting', 20);

       parent::__construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance); //this calls the parent constructor
    }
}