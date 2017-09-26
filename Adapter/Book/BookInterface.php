<?php
/**
 * Created by PhpStorm.
 * User: sadi
 * Date: 9/26/17
 * Time: 6:46 PM
 */

namespace Adapter\Book;


interface BookInterface
{
    public function open();

    public function turnPage();
}