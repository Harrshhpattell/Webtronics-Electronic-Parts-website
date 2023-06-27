

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="Image/e.png">
    <title>WebTronic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../include/css/header_footer.css">
    

</head>
<body>
  <!-- navigation -->
  <?php require('../include/header.php');?>
<!-- complete navigation -->



<?php require( "../config/config.php");?>
<?php
// user cannot access another file like register login file
if(isset($_SESSION['username'])){
    header("location: ".APPURL."");
}

if(isset($_POST['submit'])){
    if(empty($_POST['email']) OR empty($_POST['password'])){
        echo "<script>alert('one or more input are empty');</script>";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $conn->query("SELECT * from users where email='$email'");
        $login->execute();

        $fetch = $login->fetch(PDO::FETCH_ASSOC);

        if($login->rowCount() > 0){
            if(password_verify($password, $fetch['mypassword'])){
                $_SESSION['username'] =$fetch['username'];
                $_SESSION['user_id'] =$fetch['id'];
                header("location: ".APPURL."");

            }else{
                echo "<script>alert('password or email are wrong');</script>";
            }
        }else{
            echo "<script>alert('password of email are wrong');</script>";
        }
    }
}


?>


    <div class="container mb-5">


        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-control mt-5" method="post" action="login.php" >
                    <h4 class="text-center mt-3"> Login </h4>
                   
                    <div class="">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="">
                            <input type="email" name="email" class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="">
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">login</button>

                </form>
            </div>
        </div>
    </div>
    <?php require( "../include/footer.php");?>




</body>
</html>