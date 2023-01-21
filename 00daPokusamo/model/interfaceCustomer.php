<?php

namespace Customer;

interface ICustomer
{
    function buy(Order $o);
}