<?php

namespace Facade\Shop;


class CalculatePrice
{
    public function calculatePrice($material)
    {
        var_dump($material." price is :". mt_rand(100, 9999));
    }
}