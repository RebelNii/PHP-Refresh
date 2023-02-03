<?php

use Core\Response;

function dd($value){
    echo "<pre>";
    var_dump($value) . "<br>";

    echo "</pre>";
    die();

}

// dd($_SERVER['REQUEST_URI']);

function URIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($arg = 404){
    http_response_code($arg);
    require_once(BASE_PATH ."Controllers/{$arg}.php");
    die();
}

function authorize($note, $user , $status = Response::FORBIDDEN)
{
    if($note != $user){
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function views($path, $attr = [])
{
    extract($attr);
    require_once(base_path('views/' . $path));
}