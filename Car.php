<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of car
 *
 * @author Wittaya_Siriporn
 */
class Car {
    public  $color; // property
    const a = 'test';
    public function __construct($a=null){
        echo "This constructor is ".$a; // constructor have 2 method to create 1. __construct() 2.function class name Car() 
        echo '<br>';
    }
    
    public function setColor($c){
        $this->color = $c; // $this mean is this class set color
    }
    
    public function getColor(){
        return $this->color; //return color value
    }
}
