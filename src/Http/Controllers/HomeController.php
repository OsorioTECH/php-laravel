<?php

namespace Osoriotech\PhpLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Osoriotech\PhpLaravel\Http\Views\View;

class HomeController
{
    public function index(Request $request)
    {
        $view = new View('home', ['message' => 'Hello World!']);

        $response = $view->render();

        $response->send();
    }
}
