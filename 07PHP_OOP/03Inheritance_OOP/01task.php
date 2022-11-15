<?php

//abstract class

abstract class DefaultPerson
{
    abstract function walk();

    function talk()
    {
        echo 'I am talking';
    }
}

class Person extends DefaultPerson
{
    public function walk()
    {
    }
}

$defaultPerson = new Person();

class Cat extends DefaultPerson
{
}
