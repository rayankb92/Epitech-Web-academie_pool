<?php
interface iMove{
    public function moveRight();
    public function moveLeft();
    public function moveUp();
    public function moveDown();

}
class Character implements iMove{

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
    public function moveRight(){
        echo $this->name . ": moves right.\n";
    }
    public function moveLeft(){
        echo $this->name . ": moves left.\n";
    }
    public function moveUp(){
        echo $this->name . ": moves up.\n";
    }
    public function moveDown(){
        echo $this->name . ": moves down.\n";
    }
    final public function takeWeapon(){
        echo $this->name . ": take out his weapon.\n";
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
    public function getClasse()    {
        return self::CLASSE;
    }
    public function attack(){
        echo $this->name . ": Feel the power of my magic !\n";
    }
    public function __destruct(){
        echo $this->name . ": Aarrg I can’t believe I’m dead...\n";
    }
    public function moveRight(){
        echo $this->name . ": moves right like a bad boy.\n";
    }
    public function moveLeft(){
        echo $this->name . ": moves left like a bad boy.\n";
    }
    public function moveUp(){
        echo $this->name . ": moves up like a bad boy.\n";
    }
    public function moveDown(){
        echo $this->name . ": moves down like a bad boy.\n";
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
    public function getClasse()    {
        return self::CLASSE;
    }
    public function attack(){
        echo $this->name . ": I’ll crush you with my hammer !\n";
    }
    public function __destruct(){
        echo $this->name . ": By the four gods, I passed away...\n";
    }
    public function moveRight(){
        echo $this->name . ": moves right with grace.\n";
    }
    public function moveLeft(){
        echo $this->name . ": moves left with grace.\n";
    }
    public function moveUp(){
        echo $this->name . ": moves up with grace.\n";
    }
    public function moveDown(){
        echo $this->name . ": moves down with grace.\n";
    }
}

// $mage = new Mage("Jean-Luc");
// $mage->takeWeapon();
