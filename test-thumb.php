<?php

include 'vendor/autoload.php';

$thumb = PhpThumbFactory::create('images/yii.png');
$thumb->resize(500,500);
$thumb->show();

