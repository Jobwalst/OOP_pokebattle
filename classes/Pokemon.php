<?php
/**
 * This is the main Pokemon class, the subclasses Pikachu and Charmeleon are inherited from this class.
 * 
 * The class is related to subclasses Pikachu and Charmeleon. All properties of the class are private; this means
 * that the properties cannot be accessed outside the class and/or its subclasses, with the exeption of using
 * getters and setters. All of the functions in the class are public, so you can always access them. 
 */
class Pokemon{ 
    private $name;
    private $energyType;
    private $hitPoints;
    private $health;
    private $attacks;
    private $weakness;
    private $resistance;

    public static $getAlive = 0;

    /**
     * The constructor gets called every time a new instance of the class is made.
     * 
     * The constructor sets the properties of the new object. On the bottom it says self::$getAlive++, here the
     * public static $getAlive increments by 1, every time a new instance of a class gets made. with self you refer
     * to the current class (pokemon in this case), use self in static, like the $getAlive var.
     */
    public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$getAlive++;
    }
    
    /**
     * converts $this to json code.
     * 
     * $this refers to the current objects, gets used in non-static elements.
     * 
     * @return string Return a string in the form of json code.
     */
    public function __toString() {
        return json_encode($this);
    }

    /**
     * This function calculates the attack damage a specific pokemon does to another pokemon.
     * 
     * The function needs 3 parameters: the target pokemon, the attack that is used and the energy type of the
     * attacker. The calculation takes the targets weakness and/or resistance into account, before subtracting the
     * attack damage of the targets health. If there is no weakness and/or resistance, the damage is exactly the
     * damage of the attack. If the specific targets health hits 0 self::getAlive decrements by one.
     * 
     * @param object $target    The target pokemon (as an object).
     * @param object $attack    The specified attack of the attacker.
     * @param object $nrgType   Energy type of the attacker.
     * 
     * @return int Returns the health of the target pokemon.
     */
    public function attack($target, $attack, $nrgType){
        echo '<br>' . $target->name . ' health:' . '<br>' . $target->health;

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

    /**
     * You can call a static function without creating an instance of a class.
     * 
     * The function returns the number of living pokemons (the static var $getAlive).
     * 
     * @return mixed Returns a string 'Aantal levende pokemon = ' and then the static $getAlive as an integer.
     */
    public static function getPopulation(){
        return '<br>' . 'Aantal levende pokemon = ' . self::$getAlive;
    }

    /**
     * Fetches all attacks of a specified pokemon and returns them all.
     * 
     * All properties of the class are private so they cannot be accessed from outside, when you use a getter you
     * can still access a property but with restricted access (you only know what value it contains).
     * 
     * @return object Returns all attacks of a specified pokemon.
     */
    public function getAttacks(){
        return $this->attacks;
    }

    public function getEnergyType(){
        return $this->energyType;
    }
}


?>