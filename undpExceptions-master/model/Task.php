<?php

class TaskException extends Exception
{
}

class Task
{
    private $_id;
    private $_title;
    private $_description;
    private $_deadline;
    private $_completed;

    public function __construct($id, $title, $description, $deadline, $completed)
    {
        $this->setID($id);
        $this->setTitle($title);
        // $this->_id = $id;
        // $this->_title = $title;
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
        if (!is_numeric($id) || $id <= 0 || $id >= PHP_INT_MAX || $this->_id !== null)
            throw new TaskException("Task ID error");
        $this->_id = $id;
    }
    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        if (strlen($title) < 0 || strlen($title) > 255)
            throw new TaskException("Task title error");
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
