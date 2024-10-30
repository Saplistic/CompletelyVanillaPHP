<?php 

$router->get('/', 'controllers/home.php');
$router->get('/home', 'controllers/home.php');

$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php'); // Notes page
$router->get('/note', 'controllers/notes/show.php'); // Note page
$router->get('/note/create', 'controllers/notes/create.php'); // Note creation page
$router->get('/note/edit', 'controllers/notes/edit.php'); // Note edit page

$router->post('/notes', 'controllers/notes/store.php'); // Store note action
$router->patch('/note', 'controllers/notes/update.php'); // Update note action
$router->delete('/note', 'controllers/notes/destroy.php'); // Delete note action
