<?php

class Calculator
{
    private string $name;
    private float $number1;
    private float $number2;
    private float $result;

    public function __construct($name, $number1, $number2)
    {
        $this->name = $name;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    function addingTwoNumbers()
    {
        $this->result = $this->number1 + $this->number2;
    }

    function subtractingTwoNumbers()
    {
        $this->result = $this->number1 - $this->number2;
    }

    function multiplicationTwoNumbers()
    {
        $this->result = $this->number1 * $this->number2;
    }

    function dividingTwoNumbers()
    {
        $this->result = $this->number1 / $this->number2;
    }

    function getResult()
    {
        return "Kalkulator sa imenom " . $this->name . " je dobio rezultat " . $this->result;
    }
}
