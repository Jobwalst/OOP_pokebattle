<?php
class Pokemon{
    public $Name;
    public $EnergyType;
    public $HitPoints;
    public $Health;
    public $Attack;
    public $Weakness;
    public $Resistance;

    public function __construct($Name, $EnergyType, $HitPoints, $Health, $Attacks, $Weakness, $Resistance){
        $this->Name = $Name;
        $this->Energytype = $EnergyType;
        $this->Hitpoints = $HitPoints;
        $this->Health = $Health;
        $this->Attack = $Attack;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }
    
    public function __toString() {
        return json_encode($this);
    }
}

?>