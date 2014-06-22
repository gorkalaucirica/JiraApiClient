<?php

namespace spec\GorkaLaucirica\JiraApiClient\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IssueStatusSpec extends ObjectBehavior
{
    function let()
    {
        $json = array("id" => "1", "name" => "Name", "description" => "Description");
        $this->beConstructedWith($json);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('GorkaLaucirica\JiraApiClient\Model\IssueStatus');
    }

    function it_parses_json()
    {
        $json = array("id" => "1", "name" => "Name", "description" => "Description");
        $this->parseJSON($json);
    }
    function its_description_is_mutable()
    {
        $this->setDescription('description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('description');
    }

    function its_id_is_mutable()
    {
        $this->setId('1')->shouldReturn($this);
        $this->getId()->shouldReturn('1');
    }

    function its_name_is_mutable()
    {
        $this->setName('Name')->shouldReturn($this);
        $this->getName()->shouldReturn('Name');
    }
}
