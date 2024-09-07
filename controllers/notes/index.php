<?php 

$config = require base_path('config.php');

$db = new Database($config['database']); 

$notes = $db->query("select * from notes")->findMany();

view('notes/index.view.php', [
    'title' => 'Notes',
    'notes' => $notes
]);