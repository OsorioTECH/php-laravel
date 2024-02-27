<?php

use Osoriotech\PhpLaravel\Author;
use PHPUnit\Framework\TestCase;

class AuthorTest extends TestCase
{
    function test_it_should_be_construct()
    {
        $author = new Author('stiven@gmail.com','1233456', 'AUTHOR PLATZI');

        $this->assertInstanceOf(Author::class, $author);

    }

    function test_it_should_fail_when_no_key_is_given()
    {
        $this->expectException(InvalidArgumentException::class);
        $author = new Author('stiven@gmail.com','1233456', 'IO');
    }
}