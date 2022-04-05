<?php

namespace Application\Controllers;

use AbieSoft\Http\Controllers;

class HomeController extends Controllers
{

    public function index()
    {
        return $this->view(page: "home/index", data: ['title' => 'Home']);
    }
}
