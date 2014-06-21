<?php

namespace GorkaLaucirica\JiraApiClient\Model;

class IssueStatus
{
    protected $description;

    protected $id;

    protected $name;

    public function __construct($json = null)
    {
        if($json) {
            $this->parseJSON($json);
        }
    }

    public function parseJSON($json)
    {
        $this->description = $json['description'];
        $this->id = $json['id'];
        $this->name = $json['name'];
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}