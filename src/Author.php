<?php

namespace Osoriotech\PhpLaravel;

use InvalidArgumentException;

class Author extends User 
{
    public function __construct($firstName, $lastName, $key)
    {
        parent::__construct($firstName, $lastName);

        if ($key != 'AUTHOR PLATZI') 
        {
            throw new InvalidArgumentException('Invalid author key');
        }
    }
    public function getLastName() 
    {
        return $this->lastName . " " . $this->firstName;
    }
}