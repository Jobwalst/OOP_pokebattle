<?php
class Pokemon{
    public $name;
    public $energytype;
    public $hitpoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance){
        $this->name = $name;
        $this->energytype = $energytype;
        $this->hitpoints = $hitpoints;
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