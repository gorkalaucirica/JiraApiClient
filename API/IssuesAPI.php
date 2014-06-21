<?php

namespace GorkaLaucirica\JiraApiClient\API;

use GorkaLaucirica\JiraApiClient\Client;
use GorkaLaucirica\JiraApiClient\Exception\NotImplementedException;
use GorkaLaucirica\JiraApiClient\Model\Issue;

class IssuesAPI
{
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getIssue($id, $query = array())
    {
        $response = $this->client->get("/issue/$id", $query);

        return new Issue($response);

    }

    public function postIssue(Issue $issue)
    {
        throw new NotImplementedException();
    }

    public function deleteIssue($id)
    {
        throw new NotImplementedException();
    }

    public function searchIssues($jql)
    {
        $response = $this->client->get('/search', array('jql' => $jql));

        $issues = array();
        foreach ($response['issues'] as $jsonIssue) {
            $issues[] = new Issue($jsonIssue);
        }
        return $issues;
    }
} 