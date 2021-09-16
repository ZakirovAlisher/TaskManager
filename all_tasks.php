<!-- All tasks output view -->
<?php
require_once 'Models/db.php';

if (isset($_SESSION['page'], $_SESSION['orderby'], $_SESSION['direction'])) {
    //Get current params from session
    $all_tasks = getTasksPaginated($_SESSION['page'], $_SESSION['orderby'], $_SESSION['direction']);
    
} else {
    //Default params if current not exist
    $all_tasks = getTasksPaginated();
    
}


for ($i = 0; $i < sizeof($all_tasks); $i++) {
?>

    <!-- Function to replace content with textarea for edit -->
    <script>
          
    function edit(id,content){
            document.getElementById('task' + id).innerHTML = "<form method='post' action='/TaskManager/Controller/edittask.php'><input type='hidden' name='id' value=" + id + "><textarea name='content' class='w-100' style='height:" + content.length / 220 * 40 + "px; min-height:60px;'>" + content + " </textarea><button class='btn btn-success mt-3'>Save</button> </form>";
        }

    </script> 
      
    <!-- 1 Task card -->
    <div class="card shadow m-2 " id='taskid<?= $all_tasks[$i]['id'] ?>' style="width: 100%; <?php if ($all_tasks[$i]['status']) echo 'background-color:lightgreen;'; ?>">
       
      <div class="card-body">
          <h5 class="card-title">Name: <?= htmlentities($all_tasks[$i]['username'] . " Email: " . $all_tasks[$i]['email']) ?></h5>
        <p class="card-text" id='task<?= $all_tasks[$i]['id'] ?>'><?= htmlentities($all_tasks[$i]['content']) ?></p>
        
    <?php if (isset($_SESSION['admin'])) { ?>
            
            <form action="/TaskManager/Controller/changestatus.php" method="post">
                <input type="hidden" name="task_id" value="<?= $all_tasks[$i]['id'] ?>" >
                <input type="checkbox" <?php if ($all_tasks[$i]['status']) echo 'checked'; ?> onChange="this.form.submit()" style="width: 50px; height: 50px" />
            </form>
               
         <button   class="btn btn-primary" onclick="edit(<?= $all_tasks[$i]['id'] ?>, '<?= htmlentities($all_tasks[$i]['content']) ?>');">Edit</button>
    <?php } else { ?>
            
         <input type="checkbox" <?php if ($all_tasks[$i]['status']) echo 'checked'; ?> onclick="return false;"style="width: 50px; height: 50px" />
            
    <?php } ?>
        
     
      </div>
    </div>
    <!-- End of 1 Task card -->   

        
    <?php
}
    ?>


