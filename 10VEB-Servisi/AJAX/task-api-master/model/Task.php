<?php

class Task
{
    private $_id;
    private $_title;
    private $_description;
    private $_deadline;
    private $_completed;

    public function __construct($id, $title, $description, $deadline, $completed)
    {
        $this->_id = $id;
        $this->_title = $title;
        $this->_description = $description;
        $this->_deadline = $deadline;
        $this->_completed = $completed;
    }
    public function getID()
    {
        return $this->_id;
    }

    public function setID($id)
    {
        $this->_id = $id;
    }
    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }
    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }
    public function getDeadline()
    {
        return $this->_deadline;
    }

    public function setDeadline($deadline)
    {
        $this->_deadline = $deadline;
        return $this;
    }
    public function getCompleted()
    {
        return $this->_completed;
    }

    public function setCompleted($completed)
    {
        $this->_completed = $completed;
    }

    public function returnTaskArray()
    {
        $task = array();
        $task['id'] = $this->getID();
        $task['title'] = $this->getTitle();
        $task['description'] = $this->getDescription();
        $task['deadline'] = $this->getDeadline();
        $task['completed'] = $this->getCompleted();
        return $task;
    }
}
