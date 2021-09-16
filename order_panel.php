<!-- Ordering panel view -->
 <div class="card p-4 mt-3">
              
<table>
            <tr>
              <td class="pl-5">Username</td>
              <td>Email</td>
              <td>Status</td>
            </tr>
  <tr>
      <td class="pl-5" ><form class="row " method="post" action="/TaskManager/Controller/filter.php">   
              <input type="hidden"  value="username" name="orderby" />
              <input  name="direction" class="m-1 btn  <?php if ($_SESSION['orderby'] == "username" && $_SESSION['direction'] == "asc" || !isset($_SESSION['orderby'],$_SESSION['direction']) ) echo "btn-success";else{  echo 'btn-warning'; }?>" type="submit" value="asc" > 
              <input name="direction" class=" m-1 btn <?php if ($_SESSION['orderby'] == "username" && $_SESSION['direction'] == "desc" ) echo "btn-success";else{  echo 'btn-warning'; }?>" type="submit" value="desc" ></form>
      </td>
    <td ><form class="row" method="post" action="/TaskManager/Controller/filter.php" >  
              <input type="hidden"  value="email" name="orderby" />
              <input name="direction" class="m-1 btn <?php if ($_SESSION['orderby'] == "email" && $_SESSION['direction'] == "asc" ) echo "btn-success";else{  echo 'btn-warning'; }?>" type="submit" value="asc" > 
              <input name="direction" class=" m-1 btn <?php if ($_SESSION['orderby'] == "email" && $_SESSION['direction'] == "desc" ) echo "btn-success";else{  echo 'btn-warning'; }?>" type="submit" value="desc" ></form>
    </td>
    <td><form class="row" method="post" action="/TaskManager/Controller/filter.php"   >  
              <input type="hidden"  value="status" name="orderby" />
              <input name="direction" class="m-1 btn <?php if ($_SESSION['orderby'] == "status" && $_SESSION['direction'] == "asc" ) echo "btn-success";else{  echo 'btn-warning'; }?>" type="submit" value="asc"> 
              <input name="direction" class=" m-1 btn <?php if ($_SESSION['orderby'] == "status" && $_SESSION['direction'] == "desc" ) echo "btn-success";else{  echo 'btn-warning'; }?>" type="submit" value="desc" ></form>
    </td>
  </tr>
  
</table> 
    
      </div>