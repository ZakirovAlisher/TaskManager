<!-- Request to change content of task -->
<?php
session_start();
require_once '../Models/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && isset($_POST['content'])) {

        editTask($_POST['id'], $_POST['content']);
        
    }
}


header("Location:/TaskManager/index.php.#taskid" . $_POST['id']);
return;

