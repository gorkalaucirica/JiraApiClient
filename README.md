JiraApiClient
=============

PHP Library to process calls to JIRA's REST API

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


