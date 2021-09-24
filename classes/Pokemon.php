<?php
class Pokemon{
    public $name;
    public $energyType;
    public $hitPoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    
    public function __toString() {
        return json_encode($this);
    }
}

?>