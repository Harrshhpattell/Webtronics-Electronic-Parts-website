<?php require( "../layouts/header.php");?>  
<?php require( "../../config/config.php");?>
<?php    
   $select = $conn->query("SELECT * FROM users");
   $select->execute();
   $users = $select->fetchAll(PDO::FETCH_OBJ);

?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Users</h5>
               <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User name</th>
                    <th scope="col">email</th>
                    <th scope="col">Created at</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($users as $user): ?>
                  <tr>
                    <th scope="row"><?php echo $user->id; ?></th>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->created_at; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



<?php require( "../layouts/footer.php");?>  
