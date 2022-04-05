<?php

namespace AbieSoft\Console;

use AbieSoft\Utilities\Config;

class Command
{

    public function __construct($command)
    {
        unset($command[0]);
        if (isset($command[1])) {
            return match ($command[1]) {
                'start' => $this->start(),
                default => self::help()
            };
        } else {
            return self::help();
        }
    }

    public function start()
    {
        chdir('public');
        if (Config::envReader('WEB_SSL') == true) {
            $ssl = "https://";
        } else {
            $ssl = "http://";
        }
        $WebUrl = $ssl . Config::envReader('WEB_DOMAIN');
        $serverWeb = str_replace($ssl, "", $WebUrl);
        $output = null;
        $retrive = null;
        exec("php -S " . $serverWeb, $output, $retrive);
    }

    public function help()
    {
        echo "Help";
    }
}
