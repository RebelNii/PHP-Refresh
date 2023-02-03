<?php

use Core\Connect;

// require_once('Database.php');
$config = require_once(base_path('config.php'));


$db = new Connect($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM `notes` WHERE `id`=?";
// $query = "SELECT * FROM `notes` WHERE `id`=? AND `user_id`=?";

// $note = $db->query($query, [$id])->fetch();
$note = $db->query($query, [$id])->findOrFail();

// if(!$note){
//     abort();
// }

$sql = "SELECT * FROM `users` WHERE `id`=?";

$note ? $user = $db->query($sql,[$note['user_id']])->find() : '';

$currentUser = 4;

authorize($note['user_id'], $currentUser);

// if($note['user_id'] != 4){
//     abort(Response::FORBIDDEN);
// }



// dd($notes);

$heading = "My Note";


views('./notesView/show.view.php', [
    'heading' => $heading,
    'note' => $note,
    'user' => $user
]);
// require_once(base_path('./views/notesView/show.view.php'));