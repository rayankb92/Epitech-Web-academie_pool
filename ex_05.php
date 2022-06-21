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
        return Character::CLASSE;
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


// $perso = new Character("rayan");
// echo $perso->getName()."\n";
// echo $perso->getEndurance()."\n";
// echo $perso->getAgility()."\n";
// echo $perso->getStrength()."\n";
// echo $perso->getMana()."\n";
// echo $perso->getClasse()."\n";
