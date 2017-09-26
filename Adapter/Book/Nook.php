<?php

namespace Adapter\Book;

require_once "./eReaderInterface.php";

class Nook implements eReaderInterface
{

    public function turnOn()
    {
        var_dump("turn on the nook");
    }

    public function pressButton()
    {
        var_dump("next page in nook");
    }
}