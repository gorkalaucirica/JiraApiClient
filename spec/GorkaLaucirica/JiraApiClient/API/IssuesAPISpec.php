<?php

namespace spec\GorkaLaucirica\JiraApiClient\API;

use GorkaLaucirica\JiraApiClient\Client;
use GorkaLaucirica\JiraApiClient\Model\Issue;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IssuesAPISpec extends ObjectBehavior
{
    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('GorkaLaucirica\JiraApiClient\API\IssuesAPI');
    }

    function it_gets_issue(Client $client)
    {
        $response = $this->getTestResponse();
        $client->get('/issue/XXX-42', array())->shouldBeCalled()->willReturn($response);

        $this->getIssue('XXX-42', array())->shouldReturnAnInstanceOf('GorkaLaucirica\JiraApiClient\Model\Issue');
    }

    function it_posts_issues(Client $client, Issue $issue)
    {
        $issue->toJSON()->shouldBeCalled()->willReturn('{}');
        $client->post("/issue", '{}' )->shouldBeCalled()->willReturn(array('id' => 'XXX-42'));

        $response = $this->getTestResponse();
        $client->get('/issue/XXX-42', array())->shouldBeCalled()->willReturn($response);

        $this->postIssue($issue);
    }

    function it_puts_issues(Client $client, Issue $issue)
    {
        $issue->getKey()->shouldBeCalled()->willReturn('XXX-42');

        $issue->toJSON()->shouldBeCalled()->willReturn('{}');
        $client->put("/issue/XXX-42", '{}' )->shouldBeCalled()->willReturn(array('id' => 'XXX-42'));

        $json = $this->getTestResponse();
        $client->get('/issue/XXX-42', array())->shouldBeCalled()->willReturn($json);

        $this->putIssue($issue);
    }

    function it_throws_exception_if_key_null(Issue $issue)
    {
        $issue->getKey()->shouldBeCalled()->willReturn(null);

        $this->shouldThrow('GorkaLaucirica\JiraApiClient\Exception\BadRequestException')->during('putIssue',array($issue));
    }

    function it_searches_issues(Client $client)
    {
        $jql = 'project = example';
        $json = array('issues' => array($this->getTestResponse()));

        $client->get('/search', array('jql' => urlencode($jql)))->shouldBeCalled()->willReturn($json);

        $this->searchIssues($jql)->shouldHaveCount(1);
    }

    protected function getTestResponse()
    {
        return array('key' => 'XXX-42', 'fields' =>
                array('assignee' => array(),
                        'created' => '',
                        'description' => '',
                        'issuetype' => array(),
                        'labels' => array(),
                        'project' => array(),
                        'reporter' => array(),
                        'status' => array(),
                        'summary' => '',
                        'updated' => ''
                    )
                );
    }
}