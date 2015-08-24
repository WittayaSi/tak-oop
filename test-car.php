<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of test-car
 *
 * @author Wittaya_Siriporn
 */
include 'Car.php';

$c1 = new Car('honda'); // create $c1 object
$c2 = new Car('toyota'); // create $c2 object

$c1->setColor('red');
$c2->setColor('blue');

echo $c1->getColor();
echo '<br>';
echo $c2->getColor();


