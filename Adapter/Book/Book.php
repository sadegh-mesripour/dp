<?php

namespace Adapter\Book;

require_once "./BookInterface.php";

class Book implements BookInterface
{
    public function open()
    {
        var_dump("open the book");
    }

    public function turnPage()
    {
        var_dump("turning next page");
    }
}