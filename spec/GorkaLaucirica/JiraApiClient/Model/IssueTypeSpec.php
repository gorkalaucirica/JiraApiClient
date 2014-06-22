<?php

namespace spec\GorkaLaucirica\JiraApiClient\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IssueTypeSpec extends ObjectBehavior
{
    function let()
    {
        $json = array('id' => '1', 'description' => 'Description', 'iconUrl' => 'test.png', 'name' => 'name', "subtask" => false);
        $this->beConstructedWith($json);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('GorkaLaucirica\JiraApiClient\Model\IssueType');
    }

    function it_parses_json()
    {
        $json = array('id' => '1', 'description' => 'Description', 'iconUrl' => 'test.png', 'name' => 'name', "subtask" => false);
        $this->parseJSON($json);
    }

    function its_description_is_mutable()
    {
        $this->setDescription('Description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('Description');
    }

    function its_icon_url_is_mutable()
    {
        $this->setIconUrl('test.png')->shouldReturn($this);
        $this->getIconUrl()->shouldReturn('test.png');
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

    function its_subtask_is_mutable()
    {
        $this->setSubtask(true)->shouldReturn($this);
        $this->getSubtask()->shouldReturn(true);
    }
}
