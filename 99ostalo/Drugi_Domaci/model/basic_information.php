<?php

abstract class BasicInformation {
    protected int $id;
    protected string $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    abstract public function getId();
    abstract public function setId($id_variable);
    abstract public function getName();
    abstract public function setName($name_variable);
}