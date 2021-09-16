<!-- Request to change page or orders -->
<?php

session_start();
require_once '../Models/db.php';
$pages = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['page']) && isset($_POST['orderby']) && isset($_POST['direction'])) {

        $_SESSION['page'] = $_POST['page'];
        $_SESSION['orderby'] = $_POST['orderby'];
        $_SESSION['direction'] = $_POST['direction'];
        $pages = "#pages";
        
    } else if (isset($_POST['orderby']) && isset($_POST['direction'])) {
        
        $_SESSION['page'] = 1;
        $_SESSION['orderby'] = $_POST['orderby'];
        $_SESSION['direction'] = $_POST['direction'];
        
    } else {

        $_SESSION['page'] = 1;
        $_SESSION['orderby'] = "username";
        $_SESSION['direction'] = "asc";
        
    }

    $allpages = ceil(getCountTasks() / 3); // Calculate all possible pages
    // Check on next page button and additional check that next page exist
    if (isset($_POST['up']) && $allpages >= $_SESSION['page']) { 
        
        $_SESSION['page'] = $_POST['up'];
        $pages = "#pages";
        
    }
    if (isset($_POST['down']) && $_SESSION['page'] >= 1) {

        $_SESSION['page'] = $_POST['down'];
        $pages = "#pages";
        
    }
}

header("Location:/TaskManager/index.php" . $pages);
return;

