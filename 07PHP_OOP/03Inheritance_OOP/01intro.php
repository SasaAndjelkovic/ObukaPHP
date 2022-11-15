<?php

// interface, abstract class

// interface
// contract / schema
// method without body
// classes implements interfaceS
// loose coupling

interface StudentBehavior
{
    function learn($examName);
    function goDrink($clubName);
}

class Student implements StudentBehavior
{
    public function learn($examName)
    {
        echo "Learning " . $examName;
    }

    public function goDrink($clubName)
    {
        echo "Drinking in " . $clubName;
    }
}

$superMario = new Student();
$superMario->learn("PHP");
echo "<br>";
$superMario->goDrink("club");
