<?php

namespace AbieSoft\Http;

class Request
{
    public static function getMethod(): string
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public static function getCurrent(): string
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        if ($_REQUEST) {
            $path = explode("?", $path)[0];
            $request = "";
            foreach ($_REQUEST as $k => $v) {
                $request .= "{:" . $k . "}";
            }
            $path = $path . $request;
        } else {
            $path = $path;
        }

        if (rtrim($path, '/') == '') {
            $path = '/';
        } else {
            $path = rtrim($path, '/');
        }

        // die($path);
        return $path;
    }


    public static function getRequest()
    {
        return (isset($_REQUEST)) ? $_REQUEST : false;
    }
}
