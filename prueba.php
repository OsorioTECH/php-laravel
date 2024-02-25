<?php

require_once 'vendor/autoload.php';

$user = new \Osoriotech\PhpLaravel\Author('paisa@gmail.com', 123456);
$user ->setName('gido', 'sanchez');
$user->setName('STIVEN', 'OSORIO');

echo $user ->getFirstName();
echo $user ->getLastName();
echo PHP_EOL;

//var_dump($user);
