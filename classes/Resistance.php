<?php
class Resistance{
    public $energyType;
    public $number;

    public function __construct($energyType, $number){
        $this->energyType = $energyType;
        $this->number = $number;
    }

    public function __toString() {
        return json_encode($this);
    }
}