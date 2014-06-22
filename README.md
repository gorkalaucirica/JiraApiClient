JiraApiClient
=============

PHP Library to process calls to JIRA's REST API

[![Latest Stable Version](https://poser.pugx.org/gorkalaucirica/jira-api-client/v/stable.svg)](https://packagist.org/packages/gorkalaucirica/jira-api-client) [![Total Downloads](https://poser.pugx.org/gorkalaucirica/jira-api-client/downloads.svg)](https://packagist.org/packages/gorkalaucirica/jira-api-client) [![Latest Unstable Version](https://poser.pugx.org/gorkalaucirica/jira-api-client/v/unstable.svg)](https://packagist.org/packages/gorkalaucirica/jira-api-client) [![License](https://poser.pugx.org/gorkalaucirica/jira-api-client/license.svg)](https://packagist.org/packages/gorkalaucirica/jira-api-client) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/06f76af2-facb-4331-be37-ed2fb2d1fd1a/mini.png)](https://insight.sensiolabs.com/projects/06f76af2-facb-4331-be37-ed2fb2d1fd1a) [![Build Status](https://travis-ci.org/gorkalaucirica/JiraApiClient.svg?branch=master)](https://travis-ci.org/gorkalaucirica/JiraApiClient)

*This package is work in progress and some functionality is not available yet.*


##Installation

The recommended way to install JiraApiClient is through composer. Just create a composer.json file and run the php composer.phar install command to install it:

    "require": {
        "gorkalaucirica/jira-api-client": "dev-master"
    }

##Usage

    $auth = new BasicAuth('username','password');
    $client = new Client('https://example.atlassian.net/rest/api/2', $auth);

##API calls

###Filtering issues:

    $issuesAPI = new IssuesAPI($client);
    $issues = $issuesAPI->searchIssues("<your jql query>");

###Getting issue by id

    $issuesAPI = new IssuesAPI($client);
    $issues = $issuesAPI->getIssue('XXX-42');

###Posting new issue

    $newIssue = new Issue();

    //Fill new issue using setters
    //....

    $issuesAPI = new IssuesAPI($client);
    $issue = $issuesAPI->postIssue($newIssue);

##Tests

    bin/phpspec run


