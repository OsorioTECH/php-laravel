<?php

use Illuminate\Http\Request;
use Osoriotech\PhpLaravel\Http\Controllers\HomeController;
require_once __DIR__ . '/../vendor/autoload.php';


$request = Request::capture();
$controller = new HomeController();
echo $controller->index($request);