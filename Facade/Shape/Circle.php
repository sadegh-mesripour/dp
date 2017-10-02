<?php
/**
 * Created by PhpStorm.
 * User: sadi
 * Date: 10/2/17
 * Time: 2:42 PM
 */

namespace Facade\Shape;


class Circle implements Shape
{

    public function draw($height, $width)
    {
        var_dump("draw circle with width :".$width." and height : ".$height);
    }
}