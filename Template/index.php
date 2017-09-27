<?php

require_once "../vendor/autoload.php";

use Template\IranianFood;
use Template\VeggieFood;


$IranianFood = new IranianFood();
$IranianFood->addOthers();
$IranianFood->addOil();
$IranianFood->addRice();
$IranianFood->addSalt();
print_r('</br>************************************</br>');
$veggie = new VeggieFood();
$veggie->addOthers();
$veggie->addOil();
$veggie->addRice();
$veggie->addSalt();