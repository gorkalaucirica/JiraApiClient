<?php

namespace spec\GorkaLaucirica\JiraApiClient\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function let()
    {
        $json = array('name' => 'Name', 'displayName' => 'displayName');
        $this->beConstructedWith($json);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('GorkaLaucirica\JiraApiClient\Model\User');
    }

    function it_parses_json()
    {
        $json = array('name' => 'Name', 'displayName' => 'displayName');
        $this->parseJSON($json);
    }

    function its_display_name_is_mutable()
    {
        $this->setDisplayName('Name Surname')->shouldReturn($this);
        $this->getDisplayName()->shouldReturn('Name Surname');
    }

    function its_name_is_mutable()
    {
        $this->setName('name')->shouldReturn($this);
        $this->getName()->shouldReturn('name');
    }
}
