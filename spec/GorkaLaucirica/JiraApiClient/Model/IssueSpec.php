<?php

namespace spec\GorkaLaucirica\JiraApiClient\Model;

use GorkaLaucirica\JiraApiClient\Model\IssueStatus;
use GorkaLaucirica\JiraApiClient\Model\IssueType;
use GorkaLaucirica\JiraApiClient\Model\Project;
use GorkaLaucirica\JiraApiClient\Model\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IssueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('GorkaLaucirica\JiraApiClient\Model\Issue');
    }

    function its_assignee_is_mutable(User $user)
    {
        $this->setAssignee($user)->shouldReturn($this);
        $this->getAssignee()->shouldReturn($user);
    }

    function its_created_is_mutable(\DateTime $dateTime)
    {
        $this->setCreated($dateTime)->shouldReturn($this);
        $this->getCreated()->shouldReturn($dateTime);
    }

    function its_description_is_mutable()
    {
        $this->setDescription('description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('description');
    }

    function its_issue_type_is_mutable(IssueType $issueType)
    {
        $this->setIssueType($issueType)->shouldReturn($this);
        $this->getIssueType()->shouldReturn($issueType);
    }

    function its_key_is_mutable()
    {
        $this->setKey('XXX-42')->shouldReturn($this);
        $this->getKey()->shouldReturn('XXX-42');
    }

    function its_labels_is_mutable()
    {
        $this->setLabels(array('test'))->shouldReturn($this);
        $this->getLabels()->shouldReturn(array('test'));
    }

    function its_project_is_mutable(Project $project)
    {
        $this->setProject($project)->shouldReturn($this);
        $this->getProject()->shouldReturn($project);
    }

    function its_reporter_is_mutable(User $user)
    {
        $this->setReporter($user)->shouldReturn($this);
        $this->getReporter()->shouldReturn($user);
    }

    function its_status_is_mutable(IssueStatus $issueStatus)
    {
        $this->setStatus($issueStatus)->shouldReturn($this);
        $this->getStatus()->shouldReturn($issueStatus);
    }

    function its_summary_is_mutable()
    {
        $this->setSummary('Summary')->shouldReturn($this);
        $this->getSummary()->shouldReturn('Summary');
    }

    function its_updated_is_mutable(\Datetime $datetime)
    {
        $this->setUpdated($datetime)->shouldReturn($this);
        $this->getUpdated()->shouldReturn($datetime);
    }
}
