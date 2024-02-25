<?php

namespace Osoriotech\PhpLaravel;

class User {

    /**
     * @type string
     */
    protected $email;

    /**
     * @type string
     */
    protected $password;

    /**
     * @type string
     */
    protected $firstName;

    /**
     * @type string
     */
    protected $lastName;

    public function __construct($email, $password) 
    {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function setName($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

}