<?php

namespace Application\Controllers;

use AbieSoft\Http\Controllers;

class UsersController extends Controllers
{

    public function index()
    {
        return $this->view(page: "users/index", data: ['title' => 'Users']);
    }
}
