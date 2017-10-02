<?php
/**
 * Created by PhpStorm.
 * User: sadi
 * Date: 10/2/17
 * Time: 2:41 PM
 */

namespace Facade\Shape;


class Square implements Shape
{

    public function draw($height, $width)
    {
        var_dump("draw square with width :".$width." and height : ".$height);

    }
}