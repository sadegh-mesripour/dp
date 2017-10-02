<?php

namespace Facade\Shop;


class Basket
{
    public function add($material)
    {
        var_dump("add ".$material." to basket");
    }
}