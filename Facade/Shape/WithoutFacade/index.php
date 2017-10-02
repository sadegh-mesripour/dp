<?php

require_once "./../../../vendor/autoload.php";

use Facade\Shape\Circle;
use Facade\Shape\Rectangle;
use Facade\Shape\Square;


$rectangle = new Rectangle();
$square = new Square();
$circle = new Circle();

$rectangle->draw(10,20);
$square->draw(30,40);
$circle->draw(50,60);
