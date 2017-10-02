<?php

require_once "./../../../vendor/autoload.php";

use Facade\Shop\Basket;
use Facade\Shop\CalculatePrice;
use Facade\Shop\PrepareOrder;

$material = $_GET['material'];

if (isset($material)) {

    $basket = new Basket;
    $calculate = new CalculatePrice;
    $prepare = new PrepareOrder;

    $basket->add($material);
    $calculate->calculatePrice($material);
    $prepare->readyOrder($material);

} else {
    var_dump("eneter material");
}
