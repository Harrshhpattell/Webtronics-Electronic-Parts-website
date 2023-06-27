<?php require("../config/config.php"); ?>
<?php

if (isset($_POST['submit'])) {
  $pro_id = $_POST['pro_id'];
  $pro_name = $_POST['pro_name'];
  $pro_image = $_POST['pro_image'];
  $pro_price = $_POST['pro_price'];
  $pro_amount = $_POST['pro_amount'];
  $user_id = $_POST['user_id'];


  $insert = $conn->prepare("INSERT into cart (pro_id, pro_name, pro_image, pro_price, pro_amount, user_id) VALUES(:pro_id, :pro_name, :pro_image, :pro_price, :pro_amount, :user_id)");

  $insert->execute([
    ':pro_id' => $pro_id,
    ':pro_name' => $pro_name,
    ':pro_image' => $pro_image,
    ':pro_price' => $pro_price,
    ':pro_amount' => $pro_amount,
    ':user_id' => $user_id,
  ]);
}





if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //  if user refresh site than this query check product if already add than disable add to cart button 
  // if (isset($_SESSION['user_id'])) {
  //   $select = $conn->query("SELECT * from cart Where pro_id = '$id' AND user_id = '$_SESSION[user_id]'");
  //   $select->execute();
  // }

  // getting data for every product
  $row = $conn->query("SELECT * from products where status = 1 AND id='$id'");
  $row->execute();
  $product = $row->fetch(PDO::FETCH_OBJ);

} else {
  echo "404";
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="icon" href="Image/e.png">
  <title>WebTronic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../include/css/header_footer.css">
  <link rel="stylesheet" href="product.css">
</head>

<body>
  <!-- navigation -->
  <?php require('../include/header.php'); ?>
  <!-- complete navigation -->
  <section>
    <div class="sec1">
      <div class="img">
        <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/products/<?php echo $product->image; ?>" alt="product photo" width="400px" >
      </div>
      <div class="name">
        <h2><b>
            <?php echo $product->name; ?>
          </b></h2><br>
        <p>Product Code: EC-0444 <br> Availability: 202</p>
        <h4>Rs.
          <?php echo $product->price; ?>
        </h4>
        <p>(Including 18% GST)</p>
        <!-- ------------------------------------- -->
        <form method="post" id="form_data">
          <div class="">
            <input type="hidden" name="pro_id" value="<?php echo $product->id; ?>" class="form-control" id="" value="">
          </div>
          <div class="">
            <input type="hidden" name="pro_name" value="<?php echo $product->name; ?>" class="form-control" id=""
              value="">
          </div>
          <div class="">
            <input type="hidden" name="pro_image" value="<?php echo $product->image; ?>" class="form-control" id=""
              value="">
          </div>
          <div class="">
            <input type="hidden" name="pro_price" value="<?php echo $product->price; ?>" class="form-control" id=""
              value="">
          </div>
          <div class="">
            <input type="hidden" name="pro_amount" value="1" class="form-control" id="" value="">
          </div>
          <?php if (isset($_SESSION['user_id'])): ?>
            <div class="">
              <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" class="form-control" id=""
                value="">
            </div>
          <?php endif; ?>

          <div class="cart mt-4 align-items-center">
            <?php if (isset($_SESSION['user_id'])): ?>
              <?php
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                // if user refresh site than this query check product if already add than disable add to cart button 
                if (isset($_SESSION['user_id'])) {
                  $select = $conn->query("SELECT * from cart Where pro_id = '$id' AND user_id = '$_SESSION[user_id]'");
                  $select->execute();
                }
              }
              ?>


              <?php if ($select->rowCount() > 0): ?>
                <button id="submit" name="submit" type="submit" disabled class="btn btn-primary text-uppercase mr-2 px-4"><i
                    class="fas fa-shopping-cart"></i> Added to cart</button>
              <?php else: ?>
                <button name="submit" class="button-add" role="button">Add To Cart</button>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </form>





        <!-- ------------------------------------- -->
        <!-- <button name="submit" class="button-add" role="button">Add To Cart</button> -->
      </div>
    </div>
  </section>
  <section>
    <div class="description">
      <h3>Description:-</h3>
      <p>
        <?php echo $product->description; ?>
      </p>
    </div>
    <br>
    <div class="feature">
      <h3>Features:-</h3>
      <p>
        <?php echo $product->features; ?>
        <!-- <ul>
         <li>Single-Supply Operation (2.7V to 5.5V)</li>
         <li>High-Resolution Conversion of Light Intensity to Frequency</li>
         <li>Programmable Color and Full-Scale Output Frequency</li>
         <li>Power Down Feature</li>
         <li>Communicates Directly to 5V Microcontroller</li>
         <li>S0~S1: Output frequency scaling selection inputs</li>
         <li>S2~S3: Photodiode type selection inputs</li>
         <li>OUT Pin: Output frequency</li>
         <li>OE Pin: Output frequency enable pin (active low), can be impending when using</li>
         <li>Support LED lamp light supplement control</li>
        </ul>  -->
      </p>
    </div>
    <hr>
    <div style="text-align:center;">
      <p>* Product Images are shown for illustrative purposes only and may differ from actual product.</p>
    </div>
  </section>
  <?php require('../include/footer.php'); ?>

</body>

</html>


<!-- jquery -->
<script>
  $(document).ready(function () {
    $(document).on("submit", function (e) {

      e.preventDefault();
      // alert("clicked");
      var formdata = $("#form_data").serialize() + '&submit=submit';

      $.ajax({
        type: "post",
        url: "single.php?id=<?php echo $id ?>",
        data: formdata,

        success: function () {
          // alert("added to cart successfully");
          $("#submit").html("<i class='fas fa-shopping-cart'></i> Added to Cart").prop("disabled", true);
          ref();
        }
      });

      function ref() {
        $("body").load("single.php?id=<?php echo $id; ?>");
      }

    })
  });
</script>