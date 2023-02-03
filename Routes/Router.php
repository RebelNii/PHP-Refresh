<?php

namespace Routes;

class Router
{
    public $routes = [];

    public function add($URI, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $URI,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($URI, $controller)
    {
        $this->add($URI, $controller, 'GET');
    }

    public function post($URI, $controller)
    {
        $this->routes[] = [
            'uri' => $URI,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }

    public function put($URI, $controller)
    {
        $this->add($URI, $controller, 'PUT');
    }

    public function delete($URI, $controller)
    {
        $this->add($URI, $controller, "DELETE");
    }

    public function patch($URI, $controller)
    {
        $this->add($URI, $controller, 'PATCH');
    }

    public function route($URI, $method)
    {
        foreach($this->routes as $path){
            if($path['uri'] === $URI && $path['method'] === strtoupper($method)){
                return require_once(base_path($path['controller']));
            }
        }

        abort();
    }

}

// if($URI === '/codes/refresh/index.php'){
//     require_once('./Controllers/index.php');
// }else if($URI === '/codes/refresh/about'){
//     require_once('./Controllers/about.php');
// }

// if($URI === '/index.php'){
//     require_once('./Controllers/index.php');
// }else if($URI === '/about'){
//     require_once('./Controllers/about.php');
// }

// $routes = 
// [
//     '/' => '../Controllers/index.php', 
//     '/index' => base_path('./Controllers/index.php'), 
//     '/index.php' => '/Controllers/index.php', 
//     '/about' => base_path('./Controllers/about.php'), 
//     '/notes' => base_path('./Controllers/notes/index.php'), 
//     '/show' => base_path('./Controllers/notes/show.php'), 
//     '/create-note' => base_path('./Controllers/notes/create.php'), 
// ];

// $routes = require_once(base_path('/Routes/routes.php'));

// $URI = parse_url($_SERVER['REQUEST_URI'])['path'];

// function routes($URI, $routes){
//     if(array_key_exists($URI, $routes)){
//         require_once($routes[$URI]);
//     }else{
//         abort();
//     }
// }

// routes($URI, $routes);