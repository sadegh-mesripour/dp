<?php

namespace Adapter\Social;

require_once "./SocialInterface.php";
require_once "./Twitter.php";

class twitterAdapter implements SocialInterface
{

    private $twitter;

    /**
     * twitterAdapter constructor.
     * @param Twitter $twitter
     */
    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }


    public function addPost()
    {
        $this->twitter->insertPost();
    }

    public function dropPost()
    {
        $this->twitter->removePost();
    }
}