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
    <style>
      
#orderContainer
{
    font-family: 'Lato', sans-serif;
    width: 80%;
    padding-top: 250px;
    padding-bottom: 150px;
    margin: auto;
    text-align: center;
}
#orderContainer i
{
    color: rgb(5, 187, 5);
    padding-bottom: 30px;
    font-size: 10em;
}
#aboutCheck p
{
    font-weight: 100;
    letter-spacing: 1px;
}
#aboutCheck h1
{
    letter-spacing: 1px;
    word-spacing: 1px;
}

/* ----------------------------- MEDIA QUERY --------------------------- */

@media(max-width: 700px)
{
    #orderContainer i
    {
        font-size: 8em;
        padding-bottom: 30px;
    }
    h1
    {
        font-size: 18px;
    }
    p
    {
        font-size: 15px;
    }
}
    </style>

  </head>
  <body>
    <!-- navigation -->
    <?php require('../include/header.php'); ?>
    <!-- complete navigation -->
    
    <?php

  if(isset($_POST['email'])){
//     \Stripe\Stripe::setApiKey($secret_key);


// $charge = \Stripe\Charge::create([
//     'source' => $_POST['stripeToken'],
//     'amount' => $_SESSION['price'] * 100,
//     'currency' => 'inr',
    
//   ]);
  // echo "paid";


    if(empty($_POST['email']) OR empty($_POST['fname']) OR empty($_POST['lname'])){
      echo "<script>alert('one or more input are empty');</script>";
  }else{
    $email = $_POST['email'];
    $username = $_SESSION['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $orders = $_POST['prod_name'];
    $price = $_SESSION['price'];
    $token = $_POST['stripeToken'];
    $user_id = $_SESSION['user_id'];

    $insert = $conn->prepare("INSERT into orders (email,username,fname,lname,phone_num,address,orders,token,price,user_id) VALUES(:email, :username, :fname, :lname, :phone_num, :address,:orders, :token, :price, :user_id)");
    $insert->execute([
      ':email' => $email,
      ':username' => $username,
      ':fname' => $fname,
      ':lname' => $lname,
      ':phone_num' => $number,
      ':address' => $address.",".$state."-".$zipcode,
      ':orders' => $orders,
      ':token' => $token,
      ':price' => $price,
      ':user_id' => $user_id,
    ]);
  }
  }




?>


  <div id="orderContainer">
        <div id="check"><i class="fas fa-check-circle"></i></div>
        
        <div id="aboutCheck">
            <h1>Hurray!!! Order Placed Successfully! </h1>
            <p> We've sent you an email with the Order details. </p>
        </div>
    </div>
    <div class="text-center" >
    <a href="<?php echo APPURL;?>">
    <button type="button" class="btn btn-success mb-5"> Home</button>
    </a>
    </div>

<?php require("../include/footer.php"); ?>
</body>

</html>


<?php
$select = $conn->query("DELETE from cart WHERE user_id='$_SESSION[user_id]'");
$select->execute();

?>