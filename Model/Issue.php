<?php

namespace GorkaLaucirica\JiraApiClient\Model;


class Issue
{
    protected $key;

    protected $summary;

    /** @var  User */
    protected $assignee;

    protected $status;

    public function __construct($json = null)
    {
        if($json) {
            $this->parseJSON($json);
        }
    }

    public function parseJSON($json)
    {
        $this->key = $json['key'];
        $this->summary = $json['fields']['summary'];
        $this->assignee = new User();
        $this->assignee->parseJSON($json['fields']['assignee']['displayName']);
        $this->status = $json['fields']['status']['name'];
    }
} 