<!-- All tasks output view -->
<div class=" text-center" style="display:flex; justify-content:  center" > 
    
    <?php
   
    if (!isset($_SESSION['page'])) {
        $_SESSION['page'] = 1;
    }
    $allpages = ceil(getCountTasks() / 3); // Calculate all possible pages
    
    ?>

    <form method="post" action="/TaskManager/Controller/filter.php" id="pages" class="m-1"> 
        <input type="hidden" name="orderby" value="<?php if (isset($_SESSION['orderby'])) echo $_SESSION['orderby'];else { echo 'username'; } ?>">
       

        <input type="hidden" name="direction" value="<?php if (isset($_SESSION['direction'])) echo $_SESSION['direction'];else { echo 'asc'; } ?>">
     
        <!-- Previous page button -->
        <button  class="btn btn-dark " name="down"  value="<?= $_SESSION['page'] - 1 ?>" <?php if (1 >= $_SESSION['page']) echo 'disabled'; ?>/>🡄</button>
      
   <!-- Numbered pages buttons -->
   <?php for ($i = 0; $i < $allpages; $i++) { ?>  
    
        <input type="submit" name="page" class="btn <?php if ($_SESSION['page'] == $i + 1 || (!isset($_SESSION['page']) && $i == 0 )) echo "btn-dark";else {
            echo 'btn-light; border border-dark'; } ?>  "  value="<?= $i + 1 ?>" />
            
   <?php } ?>

        <!-- Next page button -->    
        <button  class="btn btn-dark " name="up"  value="<?= $_SESSION['page'] + 1 ?>" <?php if ($allpages <= $_SESSION['page']) echo 'disabled'; ?>/>🡆</button>

    </form>

</div>