<?php
use Osoriotech\PhpLaravel\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    function test_email_is_valid()
    {
        $email = new Email("stiven.osorio.2207@gmail.com");

        $this->assertInstanceOf(Email::class, $email);
    }

    function test_email_is_invalid()
    {
        $this->expectException(InvalidArgumentException::class);
        $email = new Email("esto no es un email");
    }
}