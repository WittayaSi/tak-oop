<?php

include 'Car.php';
class Toyota extends Car {
    public $engine;
    public function setEngine($c){
        $this->engine = $c;        
    }
    public function getEngine(){
        return $this->engine;
    }
}
