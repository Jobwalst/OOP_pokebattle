<?php
class Pokemon{ //This is the main pokemon class, the classes: pikachu and charmeleon are inherited from this class
    public $name;
    public $energyType;
    public $hitPoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public static $getAlive = 0;

    public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance){ //a constructor gets called each time a new instance of the class gets made
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$getAlive++;
    }
    
    public function __toString() { //returns json code (it converts $this to string)
        return json_encode($this);
    }

    public function attack($target, $attack, $nrgType){ //in this function the pokemon attack each other and prints out health before and after the attacks
        echo '<br>' . $target->name . ' health:' . '<br>' . $target->health; //use $x->y to access properties of an object

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

    public static function getPopulation(){ //static methods can be called directly, without creating an instance of a class first
        return self::$getAlive; //returns the public static var $getAlive
    }
}


?>