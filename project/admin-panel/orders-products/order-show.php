<?php require( "../layouts/header.php");?>  
<?php require( "../../config/config.php");?>
<?php    
   $select = $conn->query("SELECT * FROM orders");
   $select->execute();
   $orders = $select->fetchAll(PDO::FETCH_OBJ);

?>



      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Orders</h5>
        
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">email</th>
                    <th scope="col">username</th>
                    <th scope="col">Name</th>
                    <th scope='col'>Phone</th>
                    <th scope="col">address</th>
                    <th scope="col">orders</th>
                    <th scope="col">Total Price (Rs.)</th>
                    <th scope="col">Customer_ID</th>
                    <th scope="col">orders-time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($orders as $order) : ?>
                  <tr>
                    <th scope="row"><?php echo $order->id; ?></th>
                    <td><?php echo $order->email; ?></td>
                    <td><?php echo $order->username; ?></td>
                    <td><?php echo $order->fname; echo ' '.$order->lname; ?></td>
                    <td><?php echo $order->phone_num; ?></td>                    
                    <td><?php echo $order->address; ?></td>
                    <td><?php echo $order->orders; ?></td>
                    <td><?php echo $order->price; ?></td>
                    <td><?php echo $order->user_id; ?></td>
                    <td><?php echo $order->created_at; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


<?php require("../layouts/footer.php");?>