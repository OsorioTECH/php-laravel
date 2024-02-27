<?php

use Osoriotech\PhpLaravel\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase 
{
    function test_it_should_be_able_to_construct()
    {
        $user = new User('stiven@gmail.com','1233456');
        $this->assertInstanceOf(User::class, $user);
    }

    function test_it_should_be_a_first_name()
    {
        $user = new User('stiven@gmail.com','1233456');
        $user->setName('Stiven', 'Osorio');
        $name = $user->getFirstName();

        $this->assertEquals('Stiven', $name);

    }
}