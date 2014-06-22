<?php

namespace GorkaLaucirica\JiraApiClient\Model;


class IssueType
{
    protected $description;

    protected $iconUrl;

    protected $id;

    protected $name;

    protected $subtask;

    public function __construct($json = null)
    {
        if ($json) {
            $this->parseJSON($json);
        }
    }

    public function parseJSON($json)
    {
        $this->id = $json['id'];
        $this->description = $json['description'];
        $this->iconUrl = $json['iconUrl'];
        $this->name = $json['name'];
        $this->subtask = $json['subtask'];
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
     * @param string $iconUrl
     *
     * @return self
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param boolean $subtask
     *
     * @return self
     */
    public function setSubtask($subtask)
    {
        $this->subtask = $subtask;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSubtask()
    {
        return $this->subtask;
    }


} 