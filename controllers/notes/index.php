<?php 

$config = require base_path('config.php');

$db = new Database($config['database']); 

$notes = $db->query("select * from notes")->findMany();

$title = 'Notes';

require view('notes/index.view.php');