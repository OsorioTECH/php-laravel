<?php

namespace Osoriotech\PhpLaravel;

class Author extends User 
{
    public function getLastName() 
    {
        return $this->lastName . " " . $this->firstName;
    }
}