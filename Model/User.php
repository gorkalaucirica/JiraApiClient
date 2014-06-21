<?php

namespace GorkaLaucirica\JiraApiClient\Model;

class User
{
    protected $displayName;

    protected $name;

    public function __construct($json = null)
    {
        if($json) {
            $this->parseJSON($json);
        }
    }

    public function parseJSON($json)
    {
        $this->name = $json['name'];
        $this->displayName = $json['displayName'];
    }

    /**
     * @param mixed $displayName
     *
     * @return self
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}