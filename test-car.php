<?php

include 'Car.php';

$c1 = new Car('honda'); // create $c1 object
$c2 = new Car('toyota'); // create $c2 object

$c1->setColor('red');
$c2->setColor('blue');

echo $c1->getColor();
echo '<br>';
echo $c2->getColor();


