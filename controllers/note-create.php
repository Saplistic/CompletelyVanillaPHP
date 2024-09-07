<?php 

$currentUserId = 1;

$config = require('./config.php');

$db = new Database($config['database']); 
$notes = $db->query("select * from notes")->findMany();

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (strlen($_POST['title']) == 0) {
        $errors['title'] = 'A title is required';
    }

    if (strlen($_POST['body']) == 0) {
        $errors['body'] = 'A body is required';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO notes(title, body, user_id) VALUES(:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => $currentUserId
        ]);
    }
}

$title = 'Create Note';

require 'views/notes/note-create.view.php';