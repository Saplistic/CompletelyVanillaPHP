<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$currentUserId = 1;
authorize($note['user_id'] === $currentUserId);

global $errors;
$errors = [];

if (strlen($_POST['title']) == 0) {
    $errors['title'] = 'A title is required';
}

if (strlen($_POST['body']) == 0) {
    $errors['body'] = 'A body is required';
}

if (! empty($errors)) {
    return view('notes/edit.view.php', [
        'title' => 'Update Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('UPDATE notes SET title = :title, body = :body WHERE id = :id', [
    'id' => $_GET['id'],
    'title' => $_POST['title'],
    'body' => $_POST['body']
]);

header('location: /note?id=' . $_GET['id']);