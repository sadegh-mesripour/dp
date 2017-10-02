<?php

require_once "./../../../vendor/autoload.php";

use Facade\Shop\WithFacade\ShopFacade;

$material = $_GET['material'];
if (isset($material)) {
    $shopFacade = new ShopFacade();
    $shopFacade->order($material);
} else {
    var_dump("enter material please");
}

