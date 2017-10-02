<?php

namespace Facade\Shop\WithFacade;

require_once "./../../../vendor/autoload.php";

use Facade\Shop\Basket;
use Facade\Shop\CalculatePrice;
use Facade\Shop\PrepareOrder;

class ShopFacade
{
    protected $material;

    public function order($material)
    {
        $this->addToBasket($material);
        $this->calculatePrice($material);
        $this->prepareOrder($material);
    }

    private function addToBasket($material)
    {
        $basket = new Basket;
        $basket->add($material);
    }

    private function calculatePrice($material)
    {
        $basket = new CalculatePrice;
        $basket->calculatePrice($material);
    }

    private function prepareOrder($material)
    {
        $prepareOrder = new PrepareOrder;
        $prepareOrder->readyOrder($material);
    }
}