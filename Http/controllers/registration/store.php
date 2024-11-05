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
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    $errors['email'] = "Please provide an unique email adress";

    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
]);

login([
    'email' => $email
]);

header('location: /');
exit();