<?php

include 'Toyota.php';

$t = new Toyota('Revo');

$t->setColor('เหลือง','dd');
$t->setEngine('3000');

echo $t->getColor();
echo "<br>";
echo "เครื่องยนต์ ";
echo $t->getEngine();
echo "<br>";
echo Toyota::findName(); //call static function from toyota class

