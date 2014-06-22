<?php

namespace spec\GorkaLaucirica\JiraApiClient;

use GorkaLaucirica\JiraApiClient\Auth\AuthInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function let(AuthInterface $auth)
    {
        $this->beConstructedWith('https://example.atlassian.net/rest/api/2',$auth);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('GorkaLaucirica\JiraApiClient\Client');
    }
}
