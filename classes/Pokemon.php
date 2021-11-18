<?php
class Pokemon{ //This is the main pokemon class, the classes: pikachu and charmeleon are inherited from this class
    protected $name;
    protected $energyType;
    protected $hitPoints;
    protected $health;
    protected $attacks;
    protected $weakness;
    protected $resistance;

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

        if($target->health <= 0){
            self::$getAlive--;
        }
        
        return $target->health;
    }

    public static function getPopulation(){ //static methods can be called directly, without creating an instance of a class first
        return '<br>' . 'Aantal levende pokemon = ' . self::$getAlive; //returns the public static var $getAlive
    }

    public function getAttacks(){ //fetches all the attacks a pokemon might have and returns them (you cannot access protected properties outside the class and/or inherited classes)
        return $this->attacks;
    }

    public function getEnergyType(){ //same as above function but with only one energy type (fire, water, etc.)
        return $this->energyType;
    }
}


?>