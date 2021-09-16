<!-- Request to add task -->
<?php
session_start();
require_once '../Models/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['content'])) {
        
        addTask($_POST['username'], $_POST['email'], $_POST['content']);
        
    }
}


header("Location:/TaskManager/index.php");
return;

