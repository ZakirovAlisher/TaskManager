<!-- Database manager -->
<?php
 
try {
    $connection = new PDO('mysql:host=localhost;port=3306;dbname=taskmanager', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}
 
  function getTasks() { //Get all tasks
    global $connection;
    $query = $connection->prepare("SELECT * FROM tasks");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

 function getCountTasks() { //Get count of all tasks
    global $connection;
    $query = $connection->prepare("SELECT count(*) FROM tasks");
    $query->execute();
    $result = $query->fetch();
    return intval($result[0]);
}

function addTask($username, $email, $content) { // Add task
    global $connection;
    $query = $connection->prepare("INSERT INTO tasks(id,username, email,content, status) VALUES(NULL, :username, :email,:content,0)");
    $rows = $query->execute(array("username" => $username, "email" => $email, "content" => $content));
    return $rows > 0;
}

  function getTaskStatus($id) { // Get status of task by id
    global $connection;
    $query = $connection->prepare("SELECT status FROM tasks WHERE id = :id");
    $query->execute(array( "id" => $id));
    $result = $query->fetch();
    return $result['status'];
}

  function changeStatus($id) { // Change status on opposite of task by id
    $status = getTaskStatus($id);  
    
    if ($status){      
        $status = false;  
    }
    else{   
      $status = true;   
    }
    
    global $connection;
    $query = $connection->prepare("UPDATE tasks SET status = :status WHERE id = :id");
    $query->execute(array("status" => $status, "id" => $id));
   
}

  function editTask($id, $content) { // Edit content of task by id
    
    global $connection;
    $query = $connection->prepare("UPDATE tasks SET content = :content WHERE id = :id");
    $query->execute(array("content" => $content, "id" => $id));
   
}
  //Get 3 tasks on certain page and ordered by some field ASC/DESC
  function getTasksPaginated($page=1, $orderby="username", $direction="asc") { 
    
    $perPage = 3;  
    $offset = (intval($page)-1) * $perPage; //Calculate how much rows it should skip from db
      
    global $connection;
    
    
    $query = $connection->prepare("SELECT * FROM tasks ORDER BY $orderby $direction LIMIT $perPage OFFSET $offset");
    
 
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}