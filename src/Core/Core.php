<?php

namespace App\Core;

use App\Http\Request;
use App\Http\Response;

class Core
{
    public static function dispatch(array $routes)
    {
        $url = '/';

        // verifica se o path existe e concatena a barra junto ao path
        isset($_GET['url']) && $url .= $_GET['url'];

        // remove a barra extra do final da rota (caso seja passada.) Ex: /about/
        $url !== '/' && $url = rtrim($url, '/');
        
        $routeFound = false;
        
        foreach ($routes as $route) {
            $pattern = '#^' . preg_replace('/{id}/', '([\w-]+)', $route['path']) . '$#';

            $prefixController = 'App\\Controllers\\';
            

            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches);

                $routeFound = true;

                if ($route['method'] !== Request::method()) {
                    Response::json([
                        'error' => true,
                        'success' => false,
                        'message' => 'Sorry, method not allowed'
                    ], 405);
                    return;
                }

                [$controller, $action] = explode('@', $route['action']);

                $controller = $prefixController . $controller;
                $extendController = new $controller();
                $extendController->$action(new Request(), new Response(), $matches);
            }
        }

        if (!$routeFound) {
            $controller = $prefixController . 'NotFoundController';
            $extendController = new $controller();
            $extendController->index(new Request(), new Response());
        }
    }
}