<?php

namespace App\Controllers;

use App\Http\Request;
use App\Http\Response;

class HomeController
{
    public function index()
    {
        // var_dump($request, $response, $matches);
        echo 'Hello World <br />';
    }
}