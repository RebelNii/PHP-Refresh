<?php

use Core\App;
use Core\Connect;
use Core\Container;

$container = new Container();


$container->bind('Connect', function () {
    $config = require_once(base_path('config.php'));

    return new Connect($config['database']);
});


// $dbs = $container->resolve('Connect');

// dd($dbs);

App::setContainer($container);