<?php

namespace GorkaLaucirica\JiraApiClient\API;

use GorkaLaucirica\JiraApiClient\Client;
use GorkaLaucirica\JiraApiClient\Exception\BadRequestException;
use GorkaLaucirica\JiraApiClient\Model\Issue;

class IssuesAPI
{
    /** @var Client $client  */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Returns an Issue for the given id and matching the given query
     *
     * @param $id
     * @param array $query Check the parameters accepted here: https://docs.atlassian.com/jira/REST/latest/#d2e1379
     *                     For example: array('fields' => 'summary,comment')
     *
     * @return Issue
     */
    public function getIssue($id, $query = array())
    {
        $response = $this->client->get("/issue/$id", $query);

        return new Issue($response);

    }

    /**
     * Posts a new issue and returns a complete Issue object
     *
     * @param Issue $issue
     * @return Issue
     */
    public function postIssue(Issue $issue)
    {
        $response = $this->client->post("/issue", $issue->toJSON());

        return $this->getIssue($response['id']);
    }

    /**
     * Updates an existing issue and returns a complete Issue object
     *
     * @param Issue $issue
     *
     * @throws BadRequestException when invalid issue key given
     * @return Issue
     */
    public function putIssue(Issue $issue)
    {
        if (!$issue->getKey()) {
            throw new BadRequestException('Invalid issue key');
        }

        $this->client->put("/issue/" . $issue->getKey(), $issue->toJSON());

        return $this->getIssue($issue->getKey());
    }

//    public function deleteIssue($id)
//    {
//        throw new NotImplementedException();
//    }

    /**
     * Searches by jql query provided
     *
     * @param string $jql More info about jql: https://confluence.atlassian.com/display/JIRA/Advanced+Searching
     * @return array Issue
     */
    public function searchIssues($jql)
    {
        $response = $this->client->get('/search', array('jql' => urlencode($jql)));

        $issues = array();
        foreach ($response['issues'] as $jsonIssue) {
            $issues[] = new Issue($jsonIssue);
        }

        return $issues;
    }
} 