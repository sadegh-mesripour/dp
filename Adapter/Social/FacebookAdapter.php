<?php

namespace Adapter\Social;

require_once "./SocialInterface.php";
require_once "./FaceBook.php";

class FacebookAdapter implements SocialInterface
{
    private $facebook;

    public function __construct(FaceBook $faceBook)
    {
        $this->facebook = $faceBook;
    }

    public function addPost()
    {
        $this->facebook->createPost();
    }

    public function dropPost()
    {
       $this->facebook->deletePost();
    }
}