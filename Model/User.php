<?php

namespace GorkaLaucirica\JiraApiClient\Model;

class User
{
    public function __construct($json = null)
    {
        if($json) {
            $this->parseJSON($json);
        }
    }

    public function parseJSON($json)
    {

    }
}