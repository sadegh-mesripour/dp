<?php

namespace Adapter\Book;

require_once  "./eReaderInterface.php";

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump("turn on the kindle");
    }

    public function pressButton()
    {
        var_dump("next page in kindle");
    }
}