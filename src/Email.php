<?php

namespace Osoriotech\PhpLaravel;

use InvalidArgumentException;

class Email
{
    private $address;

    public function __construct($address)
    {
        if(! filter_var($address, FILTER_VALIDATE_EMAIL))
        {
            throw new InvalidArgumentException('Invalid email address: ' . $address);
        }

        $this->address = $address;
    }

    public function getEmailAddress()
    {
        return $this->address;
    }

}