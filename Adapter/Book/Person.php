<?php

namespace Adapter\Book;

require_once "./BookInterface.php";
require_once "./eReaderAdapter.php";
require_once "./Book.php";
require_once "./Kindle.php";
require_once "./Nook.php";

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book-> turnPage();
    }
}

$person = new Person();

print_r($person->read(new Book()).'</br>******************************</br>');
print_r($person->read(new eReaderAdapter(new Kindle())).'</br>******************************</br>');
print_r('</br>'.$person->read(new eReaderAdapter(new Nook())));
