<?php

use Core\App;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

global $errors;
$errors = [];

if (strlen($_POST['email']) == 0) {
    $errors['email'] = 'An email is required';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "A valid email is required";
}

if (strlen($_POST['password']) == 0) {
    $errors['password'] = 'A password is required';
}

if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
    exit();
}

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) { // User matching email adress is found
    if (password_verify($password, $user['password'])) { // & Entered password matches user
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}

$errors['user'] = 'No matching account found with that email adress';
return view('session/create.view.php', [
    'errors' => $errors
]);
