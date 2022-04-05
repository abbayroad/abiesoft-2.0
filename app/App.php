<?php

namespace AbieSoft;

use AbieSoft\Http\Route;

class App
{
    public function start()
    {
        $route = new Route;
        $route->setCurrentPage();
    }
}
