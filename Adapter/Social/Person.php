<?php

namespace Adapter\Social;

require_once "./SocialInterface.php";
require_once "./FacebookAdapter.php";
require_once "./twitterAdapter.php";
require_once "./FaceBook.php";
require_once "./Twitter.php";

class Person
{
    public function socialActions(SocialInterface $social)
    {
        $social->addPost();
        $social->dropPost();
    }
}

$person = new Person();
print_r($person->socialActions(new FacebookAdapter(new FaceBook)).'</br>******************************</br>');
print_r('</br>'.$person->socialActions(new twitterAdapter(new Twitter)));
