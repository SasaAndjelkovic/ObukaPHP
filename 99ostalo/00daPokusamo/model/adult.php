<?php

// namespace Customer;
namespace Customer;

use ACustomer\Customer;

require_once('AbstructCustomer.php');
// require_once('customer.php');
require_once('traitCard.php');

class Adult extends Customer
{
    use CreditCard;
    public function buy(Order $o)
    {
        //implement
        echo "Implement me<br>";
    }
}