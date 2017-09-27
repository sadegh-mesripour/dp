<?php

namespace Template;


abstract class Food
{
    public function addSalt()
    {
        var_dump("added some salt");
    }
    public function addOil()
    {
        var_dump("added some oil");
    }
    public function addRice()
    {
        var_dump("added some rice");
    }

    abstract public function addOthers();
}