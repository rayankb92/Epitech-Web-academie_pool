<?php

class MyAttribute{

    public $_var1="";
    public function __construct($affichage){
        $this->_var1 = $affichage;

    }
    
    public function display(){
            echo $this->_var1 . "\n";
        }
    
}

// $foo = new MyAttribute("Jean Luc");
// $foo->display();