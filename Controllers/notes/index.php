<?php
use Core\App;
use Core\Connect;
// require_once('Database.php');
// $config = require_once(base_path('config.php'));

// $db = new Connect($config['database']);

$db = App::resolveContainer()->resolve('Connect');

// dd($res);

$query = "SELECT * FROM `notes` WHERE `user_id`=? ";

$notes = $db->query($query, [4])->fetch();
// $notes = $db->query($query, [4])->findOrFail();

if(!$notes){
    abort();
}

// dd($notes);

$heading = "Notes";



require_once(base_path('./views/notesView/index.view.php'));