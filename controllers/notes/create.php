<?php 

use Core\Database;

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $config = require base_path('config.php');
    $db = new Database($config['database']); 


    if (strlen($_POST['title']) == 0) {
        $errors['title'] = 'A title is required';
    }

    if (strlen($_POST['body']) == 0) {
        $errors['body'] = 'A body is required';
    }

    if (empty($errors)) {

        $currentUserId = 1;

        $db->query('INSERT INTO notes(title, body, user_id) VALUES(:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => $currentUserId
        ]);
    }
}

view('notes/create.view.php', [
    'title' => 'Create Note'
]);