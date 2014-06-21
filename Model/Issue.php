<?php

namespace GorkaLaucirica\JiraApiClient\Model;


class Issue
{
    /** @var  User */
    protected $assignee;

    /** @var  \DateTime */
    protected $created;

    /** @var  IssueType */
    protected $issueType;

    protected $key;

    protected $labels;

    /** @var  User */
    protected $reporter;

    protected $status;

    protected $summary;

    /** @var  \DateTime */
    protected $updated;

    public function __construct($json = null)
    {
        if($json) {
            $this->parseJSON($json);
        }
    }

    public function parseJSON($json)
    {
        $this->assignee = new User($json['fields']['assignee']);
        $this->created = new \DateTime($json['fields']['created']);
        $this->issueType = new IssueType($json['fields']['issuetype']);
        $this->key = $json['key'];
        $this->labels = $json['fields']['labels'];
        $this->reporter = new User($json['fields']['reporter']);
        $this->status = new IssueStatus($json['fields']['status']);
        $this->summary = $json['fields']['summary'];
        $this->updated = new \DateTime($json['fields']['updated']);
    }

    /**
     * @param \GorkaLaucirica\JiraApiClient\Model\User $assignee
     *
     * @return self
     */
    public function setAssignee(User $assignee)
    {
        $this->assignee = $assignee;

        return $this;
    }

    /**
     * @return \GorkaLaucirica\JiraApiClient\Model\User
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * @param \DateTime $created
     *
     * @return self
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \GorkaLaucirica\JiraApiClient\Model\IssueType $issueType
     *
     * @return self
     */
    public function setIssueType(IssueType $issueType)
    {
        $this->issueType = $issueType;

        return $this;
    }

    /**
     * @return \GorkaLaucirica\JiraApiClient\Model\IssueType
     */
    public function getIssueType()
    {
        return $this->issueType;
    }

    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param User $reporter
     *
     * @return self
     */
    public function setReporter(User $reporter)
    {
        $this->reporter = $reporter;

        return $this;
    }

    /**
     * @return User
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * @param IssueStatus $status
     *
     * @return self
     */
    public function setStatus(IssueStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return IssueStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param \DateTime $updated
     *
     * @return self
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}