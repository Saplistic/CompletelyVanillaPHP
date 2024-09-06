<?php 

$config = require('./config.php');

$db = new Database($config['database']); 
$notes = $db->query("select * from notes")->findMany();

$title = 'Notes';

require 'views/notes/notes.view.php';