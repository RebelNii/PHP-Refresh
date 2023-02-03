<?php

// $URI = parse_url($_SERVER['REQUEST_URI'])['path'];



function redirect($URI = '/')
{
    $routes = require('routes.php');
    
    // dd($routes);
    if (array_key_exists($URI, $routes)) {
        require_once($routes[$URI]);
    } else {
        abort();
    }
}

