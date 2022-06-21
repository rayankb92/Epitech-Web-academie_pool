<?php

class MyAttributes{

    private $attribut1;
    private $attribut2;

    public function __construct($a, $b){
        $this->attribut1 = $a;
        $this->attribut2 = $b;
        
    }

    public function getA(){
        return $this->attribut1;
    }

    public function getB(){
        return $this->attribut2;
    }
    public function setB($attribut2){
        $this->attribut2 = $attribut2;
    }
    public function setA($attribut1){
        $this->attribut1 = $attribut1;
    }
    

    public function display(){
        echo $this->attribut1 . " " .  $this->attribut2 . "\n";
    }


}
// $foo = new My_Attributes("hello", "world");
// $foo->display();