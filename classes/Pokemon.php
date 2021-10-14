<?php
class Pokemon{
    public $name;
    public $energyType;
    public $hitPoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public static $getAlive = 0;

    public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$getAlive++;
        //self::getPopulation();
    }
    
    public function __toString() {
        return json_encode($this);
    }

    public function attack($target, $attack, $nrgType){
        echo '<br>' . $target->health;

        if($target->weakness->energyType == $nrgType->type){
            $target->health -= ($attack->damage *= $target->weakness->multiplier);
        }
        else if($target->resistance->energyType == $nrgType->type){
            $target->health -= ($attack->damage -= $target->resistance->number);
        }
        else{
            $target->health -= $attack->damage;
        }
        
        return $target->health;
    }

    public static function getPopulation(){
        return self::$getAlive;
    }
}


?>