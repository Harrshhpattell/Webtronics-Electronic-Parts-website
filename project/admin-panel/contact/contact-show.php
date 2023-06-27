<?php require( "../layouts/header.php");?>  
<?php require( "../../config/config.php");?>
<?php    
   $select = $conn->query("SELECT * FROM contact");
   $select->execute();
   $contacts = $select->fetchAll(PDO::FETCH_OBJ);

?>



      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Contact</h5>
        
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">username</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email-id</th>
                    <th scope='col'>Phone</th>
                    <th scope="col">Message</th>
                    <th scope="col">Time</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($contacts as $contact) : ?>
                  <tr>
                    <th scope="row"><?php echo $contact->id; ?></th>
                    <td><?php echo $contact->username; ?></td>
                    <td><?php echo $contact->name;?></td>
                    <td><?php echo $contact->email;?></td>
                    <td><?php echo $contact->number;?></td>
                    <td><?php echo $contact->message;?></td>
                    <td><?php echo $contact->created_at; ?></td>
                    <td><a href="mailto: <?php echo $contact->email;?>" class="btn btn-primary  text-center ">Send mail</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


<?php require("../layouts/footer.php");?>