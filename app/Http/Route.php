<?php

namespace AbieSoft\Http;

use AbieSoft\Auth\Authentication;

class Route
{

    protected static array $routes = [];

    public static function get($path, $callback)
    {
        return self::$routes['get'][$path] = $callback;
    }

    public static function post($path, $callback)
    {
        return self::$routes['post'][$path] = $callback;
    }

    public static function data($page, $controller, $auth = false)
    {
        Route::get('/' . $page, [$controller, 'index']);
        Route::get('/' . $page, [$controller, 'index']);
        Route::get('/' . $page . '/{:p}', [$controller, 'index']);
        Route::get('/' . $page . '/baru', [$controller, 'baru']);
        Route::get('/' . $page . '/{:edit}', [$controller, 'edit']);
        Route::get('/' . $page . '/{:detail}', [$controller, 'detail']);
        Route::post('/' . $page . '/create', [$controller, 'postcreate']);
        Route::post('/' . $page . '/update/{:id}', [$controller, 'postupdate']);
        Route::post('/' . $page . '/delete/{:id}', [$controller, 'postdelete']);
    }

    public function setCurrentPage()
    {
        $method = Request::getMethod();
        $request = Request::getRequest();
        $current = Request::getCurrent();
        $callback = self::$routes[$method][$current] ?? false;

        if ($callback == false) {
            $controller = new Controllers();
            return $controller->view(page: "error/404", data: ['title' => 'Error 404']);
        }

        if (is_string($callback)) {
            die($callback);
        }

        if (is_array($callback)) {
            if ($method == "post") {
                return $this->postMethod($request, $callback);
            } else {
                return $this->getMethod($request, $callback);
            }
        }

        echo call_user_func($callback);
    }

    public function postMethod($request, $callback)
    {
        $controller = new $callback[0]();
        $func = $callback[1];
        if ($request) {
            return $controller->$func($request);
        } else {
            return $controller->$func();
        }
    }

    public function getMethod($request, $callback)
    {
        $controller = new $callback[0]();
        $func = $callback[1];
        if ($request) {
            return $controller->$func($request);
        } else {
            return $controller->$func();
        }
    }
}
