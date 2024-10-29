<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

global $errors; // make global so that its accessible in other file's functions

$errors = [];

if (strlen($_POST['title']) == 0) {
    $errors['title'] = 'A title is required';
}

if (strlen($_POST['body']) == 0) {
    $errors['body'] = 'A body is required';
}

if (! empty($errors)) {
    
    return view('notes/create.view.php', [
        'title' => 'Create Note',
        'errors' => $errors
    ]);
}

$currentUserId = 1;

$db->query('INSERT INTO notes(title, body, user_id) VALUES(:title, :body, :user_id)', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'user_id' => $currentUserId
]);

header('location: /notes');