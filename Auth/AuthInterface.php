<?php

namespace GorkaLaucirica\JiraApiClient\Auth;

interface AuthInterface
{
    public function getCredential();

    public function getUsername();

    public function getPassword();
} 