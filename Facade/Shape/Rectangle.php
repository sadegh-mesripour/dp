<?php

namespace Facade\Shape;


class Rectangle implements Shape
{

    public function draw($height, $width)
    {
        var_dump("draw rectangle with width :".$width." and height : ".$height);
    }
}