<!-- Request to login as admin -->
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['login']) && isset($_POST['password'])) {

        if ($_POST['login'] == "admin" && $_POST['password'] == 123) {

            $_SESSION['admin'] = true;
            
        } else {
            
            header("Location:/TaskManager/index.php?loginerror");
            return;
            
        }

        header("Location:/TaskManager/index.php");
        return;
    }
}