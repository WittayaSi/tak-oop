<?php

include 'Toyata.php';

$t = new Toyata('Revo');

$t->setColor('เหลือง','dd');
$t->setEngine('3000');

echo $t->getColor();
echo "<br>";
echo "เครื่องยนต์ ";
echo $t->getEngine();
echo "<br>";
echo Toyata::findName();

