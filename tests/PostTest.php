<?php
use Osoriotech\PhpLaravel\Post;
use PHPUnit\Framework\TestCase;
use Osoriotech\PhpLaravel\Author;

class PostTest extends TestCase 
{
    function test_it_gives_us_the_author_name()
    {
        $author = new Author(
            'stiven.osorio.2207@gmail.com', 
            123456, 
            'AUTHOR PLATZI'
        );

        $author->setName('Stiven', 'Osorio');

        $post = new Post(
            $author, 
            'A title', 
            'Apost body'
        );

        $this->assertEquals(
            'By Stiven',
            $post->getAuthor()
        );
        
    }
}