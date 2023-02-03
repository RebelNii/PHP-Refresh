<?php

use Core\Connect;
use Helpers\Validator;

$config = require_once(base_path('config.php'));
require_once(base_path('Helpers/Validator.php'));

$db = new Connect($config['database']);

$heading = 'Create New Note';
$err = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // if (empty(trim($_POST['title'])) || empty(trim($_POST['body']))) {
    //     // echo "<script>window.location.href='/notes'</script>";
    //     // echo "<script>window.alert('Please Complete Form')</script>";
    //     $err['msg'] = "Incomplete form";
    // }

    // if (strlen(trim($_POST['body'])) > 1000) {
    //     $err['msgs'] = "Form input value is too long";
    // }

    if(! Validator::stringCheck($_POST['body'], 1,1000))
    {
        $err['msg'] = 'Body of no more than 1,000 characters is required';
    }


    if (empty($err)) {
        $sql = "INSERT INTO `notes`(title, body, user_id) VALUES (?, ?, ?) ";
        $sql = "INSERT INTO `notes` SET `title`=?, `body`=?, `user_id`=? ";
        $title = addslashes($_POST['title']);
        // $body = addslashes($_POST['body']);
        $body = $_POST['body'];
        $res = $db->query($sql, [$title, $body, 4]);
    }
}

views('./notesView/create.view.php', [
    'heading' => $heading,
    'err' => $err
]);
