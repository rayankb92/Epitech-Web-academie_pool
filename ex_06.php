<?php
class Character{

    protected $name;
    protected $endurance;
    protected $agility;
    protected $strength;
    protected $mana;
    const CLASSE ='Character';

    
    function __construct($name){
        $this->name = $name;
        $this->endurance = 50;
        $this->agility = 2;
        $this->strength = 2;
        $this->mana = 2;

    }
    public function getClasse(){
        return self::CLASSE;
    }

    public function getName(){
        return $this->name;
    }
    public function getEndurance(){
        return $this->endurance;
    }
    public function getAgility(){
        return $this->agility;
    }
    public function getStrength(){
        return $this->strength;
    }
    public function getmana(){
        return $this->mana;
    }
}

class Paladin extends Character
{     

    const CLASSE = "Paladin";
    public function __construct($name){
        $this->name = $name;
        echo $this->name . ": I’ll engrave my name in the history !\n";
        $this->endurance = 100;
        $this->strength = 3;
        $this->agility = 10;
        $this->mana = 3;

    }
    public function attack(){
        echo $this->name . ": Feel the power of my magic !\n";
    }
    public function __destruct(){
        echo $this->name . ": Aarrg I can’t believe I’m dead...\n";
    }
}


class Mage extends Character
{     

    const CLASSE = "Mage";
    public function __construct($name){
        $this->name = $name;
        echo $this->name . ": May the gods be with me.\n";
        $this->endurance = 70;
        $this->strength = 3;
        $this->agility = 10;
        $this->mana = 10;
    }
    public function getName(){
        return $this->name;
    }
    public function attack(){
        echo $this->name . ": I’ll crush you with my hammer !\n";
    }
    public function __destruct(){
        echo $this->name . ": By the four gods, I passed away...\n";
    }
}

// $paladin = new Paladin("Jean-Luc");
$mage = new Mage("Robert");
// $character = new Character('rayan');

// $paladin->attack();
// $mage->attack();
// echo $character-> getClasse() . "\n";
// echo $paladin-> getClasse() . "\n";
// echo $mage-> getClasse() . "\n";
echo $mage::getClasse();
echo Mage::CLASSE;
