<?php

use Routes\Router;

const BASE_PATH = __DIR__ . '/../';

require_once(BASE_PATH .'Helpers/helpsFunc.php');


spl_autoload_register(function($class){
    // dd($class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    // dd($class);
    require_once(base_path($class .'.php'));
});

// require_once(BASE_PATH .'Response.php');
// require_once(base_path('Response.php'));
// require_once(BASE_PATH .'Connect.php');
// require_once(base_path('Connect.php'));
// require_once(BASE_PATH .'Routes/redirect.php');
// require_once(base_path('Routes/redirect.php'));
// require_once(BASE_PATH .'Routes/router.php');
// require_once(base_path('Routes/router.php'));

$router = new Router();

$routes = require_once(base_path('/Routes/routes.php'));

require_once(base_path('bootstrap.php'));


$URI = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($URI, $method);


