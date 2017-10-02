<?php

namespace Facade\Shape\WithFacade;

require_once "./../../../vendor/autoload.php";

use Facade\Shape\Circle;
use Facade\Shape\Rectangle;
use Facade\Shape\Square;


class ShapeFacade
{
//    protected static $height;
//    protected static $width;

//    public static function drawShapes($height, $width)
//    {
//        self::$height = $height;
//        self::$width = $width;
//        self::drawSquare(self::$height, self::$width);
//        self::drawCircle(self::$height, self::$width);
//        self::drawRectangle(self::$height, self::$width);
//    }

    public static function drawSquare($height, $width)
    {
        $square = new Square();
        $square->draw($height, $width);
    }

    public static function drawCircle($height, $width)
    {
        $square = new Circle();
        $square->draw($height, $width);
    }

    public static function drawRectangle($height, $width)
    {
        $square = new Rectangle();
        $square->draw($height, $width);
    }
}