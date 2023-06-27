


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

    <?php require( "../config/config.php");?>

<?php
// user cannot access another file like register login file
if(isset($_SESSION['username'])){
    header("location: ".APPURL."");
}


if(isset($_POST['submit'])){
    if(empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password'])){
        echo "<script>alert('one or more input are empty');</script>";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = $conn->prepare("INSERT into users (username, email, mypassword) Values (:username, :email, :mypassword)");

        $insert->execute([
            ':username' => $username,
            ':email' => $email,
            ':mypassword' => password_hash($password,PASSWORD_DEFAULT) ,
        ]);
        header("location:login.php");
    }

}

?>




    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-control mt-5" method="post" action="register.php">
                    <h4 class="text-center mt-3"> Register </h4>
                    <div class="">
                        <label for="" class="col-sm-2 col-form-label">Username</label>
                        <div class="">
                            <input type="text" name="username" class="form-control" id="" value="">
                        </div>
                    </div>
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
                    <button name="submit" class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">register</button>

                </form>
            </div>
        </div>



    </div>

    <?php require("../include/footer.php"); ?>




</body>

</html>