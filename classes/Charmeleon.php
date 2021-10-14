<?php
class Charmeleon extends Pokemon{
    public function __construct($name){
        $energyType = new EnergyType('fire', 25);
        $hitPoints = 60;
        $attacks = [new Attack('head butt', 10), new Attack('flare', 30)];
        $weakness = new Weakness('water', 2);
        $resistance = new Resistance('lightning', 10);

        parent::__construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance);
    }
}