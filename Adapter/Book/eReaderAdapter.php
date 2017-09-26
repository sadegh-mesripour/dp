<?php

namespace Adapter\Book;

require_once "./BookInterface.php";
require_once "./eReaderInterface.php";

class eReaderAdapter implements BookInterface
{
    protected $eReader;

    public function __construct(eReaderInterface $eReader)
    {
        $this->eReader = $eReader;
    }

    public function open()
    {
        $this->eReader->turnOn();
    }

    public function turnPage()
    {
        $this->eReader->pressButton();
    }
}