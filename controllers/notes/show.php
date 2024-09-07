<?php 

$config = require('./config.php');
$db = new Database($config['database']);

$currentUserId = 1;
$title = 'Notes';

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require 'views/notes/show.view.php';