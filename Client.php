<?php

namespace GorkaLaucirica\JiraApiClient;

use Buzz\Browser;
use Buzz\Client\Curl;
use GorkaLaucirica\JiraApiClient\Auth\AuthInterface;

class Client
{
    protected $baseUrl;

    protected $auth;

    public function __construct($baseUrl, AuthInterface $auth)
    {
        $this->baseUrl = $baseUrl;
        $this->$auth = $auth;
    }

    public function get($resource, $query = array())
    {
        $curl = new Curl();
        $browser = new Browser($curl);

        $url = $this->baseUrl . $resource;
        if(sizeof($query) > 0) {
            $url .= "?";
        }

        foreach($query as $key => $value) {
            $url .= "$key=$value&";
        }

        $headers = array("Authorization" => $this->auth->getCredential());

        $response = $browser->get($url, $headers);
        return json_decode($response->getContent(), true);
    }
} 