<?php

namespace Routes;

// return 
// [
//     '/' => '../Controllers/index.php', 
//     '/index' => base_path('./Controllers/index.php'), 
//     '/index.php' => '/Controllers/index.php', 
//     '/about' => base_path('./Controllers/about.php'), 
//     '/notes' => base_path('./Controllers/notes/index.php'), 
//     '/show' => base_path('./Controllers/notes/show.php'), 
//     '/create-note' => base_path('./Controllers/notes/create.php'), 
// ];

$router->get('/', 'Controllers/index.php');
$router->get('/index', 'Controllers/index.php');
$router->get('/about', 'Controllers/about.php');
$router->get('/notes', 'Controllers/notes/index.php');
$router->get('/show', 'Controllers/notes/show.php');
$router->get('/create-note', 'Controllers/notes/create.php');