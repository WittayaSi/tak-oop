<?php

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
    
    public static function findName(){
        return "hello";
    }
}
