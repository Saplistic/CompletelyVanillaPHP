<?php 

$router->get('/', 'home.php');
$router->get('/home', 'home.php');

$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/notes', 'notes/index.php'); // Notes page
$router->get('/note', 'notes/show.php'); // Note page
$router->get('/note/create', 'notes/create.php'); // Note creation page
$router->get('/note/edit', 'notes/edit.php'); // Note edit page

$router->post('/notes', 'notes/store.php'); // Store note action
$router->patch('/note', 'notes/update.php'); // Update note action
$router->delete('/note', 'notes/destroy.php'); // Delete note action

$router->get('/register', 'registration/create.php');
$router->post('/register', 'registration/store.php');

$router->get('/login', 'session/create.php');
$router->post('/session', 'session/store.php');
$router->delete('/session', 'session/destroy.php');
