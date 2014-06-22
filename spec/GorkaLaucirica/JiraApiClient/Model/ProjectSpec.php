<?php

namespace spec\GorkaLaucirica\JiraApiClient\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProjectSpec extends ObjectBehavior
{
    function let()
    {
        $json = array('id' => '1', 'key' => 'XXX', 'name' => 'Name');
        $this->beConstructedWith($json);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('GorkaLaucirica\JiraApiClient\Model\Project');
    }

    function it_parses_json()
    {
        $json = array('id' => '1', 'key' => 'XXX', 'name' => 'Name');
        $this->parseJSON($json);
    }

    function its_id_is_mutable()
    {
        $this->setId('1')->shouldReturn($this);
        $this->getId()->shouldReturn('1');
    }

    function its_key_is_mutable()
    {
        $this->setKey('XXX')->shouldReturn($this);
        $this->getKey()->shouldReturn('XXX');
    }

    function its_name_is_mutable()
    {
        $this->setName('Name')->shouldReturn($this);
        $this->getName()->shouldReturn('Name');
    }
}
