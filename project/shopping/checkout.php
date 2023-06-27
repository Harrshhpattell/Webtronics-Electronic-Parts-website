<?php require("../config/config.php"); ?>


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
</head>

<body>
  <!-- navigation -->
  <?php require('../include/header.php'); ?>
  <!-- complete navigation -->


  <div class="container">
    <!-- Heading -->
    <h2 class="my-5 h2 text-center">Checkout</h2>

    <div class="alert alert-success" role="alert">
      Total price to be paid <button type="button" class="btn btn-light"> Rs.
        <?php echo $_SESSION['price']; ?>
      </button>
    </div>

    <div class="row d-flex justify-content-center align-items-center h-100 mt-5 mt-5">

      <div class="col-md-12 mb-4">

        <div class="card">

          <form class="card-body" method="post" action="charge.php">

            <div class="row">

              <div class="col-md-6 mb-2">

                <div class="md-form">
                  <label for="firstName" class="">First name</label>

                  <input type="text" name="fname" id="firstName" class="form-control">
                </div>

              </div>


              <div class="col-md-6 mb-2">

                <div class="md-form">
                  <label for="lastName" class="">Last name</label>

                  <input type="text" name="lname" id="lastName" class="form-control">
                </div>

              </div>

            </div>

            <!--email-->
            <div class="md-form mb-5">
              <label for="email" class="">Email</label>

              <input type="text" id="email" name="email" class="form-control" placeholder="youremail@example.com">
            </div>

            <!--address-->
            <div class="md-form mb-5">
              <label for="address" class="">Address</label>

              <input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St">
            </div>
            <!-- ..... -->
            <?php

            $products = $conn->query("SELECT * from cart where user_id = '$_SESSION[user_id]'");
            $products->execute();
            $allProducts = $products->fetchAll(PDO::FETCH_OBJ);
            ?>


            <input type="text" name="prod_name"
              value="<?php foreach ($allProducts as $product): ?><?php echo $product->pro_name; ?> X <?php echo $product->pro_amount; ?> ,  <?php endforeach; ?>"
              id="address" class="form-control" placeholder="1234 Main St" hidden>


            <div class="row">




              <div class="col-lg-4 col-md-6">

                <input type="text" name="state" placeholder="State" class="form-control"  required>

              </div>

              <div class="col-lg-4 col-md-6">

                <input type="text" name="zipcode" placeholder="Zip Code" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>

              </div>
              <div class="col-lg-4 col-md-6">
                <input type="tel" name="number" placeholder="phone number" class="form-control" required>
              </div>


            </div>

            <div class="form-group mt-5">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" require>
                <label class="form-check-label" for="gridCheck">
                  <a href="#">Terms & Conditions</a>
                </label>
              </div>
            </div>

            <hr class="mb-4">


            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="pk_test_51MidsPSHNyXjKjDYXkHaB1iekYbX66AcmfLakbw5E5QiVKh8yptybXXWypz7NkqnYdySNhCjWr8giBa4MitSd5gm00BZ6ToyB4"
              data-currency="inr" data-label="pay now">
              </script>

          </form>

        </div>

      </div>
    </div>
  </div>

  <?php require("../include/footer.php"); ?>
</body>

</html>