<?php

namespace AbieSoft\Http;

use Latte\Engine;

class Controllers
{

    public function view($page, $data = null)
    {
        $latte = new Engine;
        $latte->setTempDirectory('../temp');
        $latte->render('../templates/' . $page . '.php.latte', $data);
        $latte->setAutoRefresh(true);
    }
}
