<!-- Request to change status of task -->
<?php
session_start();
require_once '../Models/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['task_id'])) {

        changeStatus($_POST['task_id']);
        
    }
}


header("Location:/TaskManager/index.php.#taskid" . $_POST['task_id']);
return;

