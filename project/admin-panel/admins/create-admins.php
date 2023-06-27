<?php require( "../layouts/header.php");?>  
<?php require( "../../config/config.php");?>
<?php
// user cannot access another file like admin register file
if(!isset($_SESSION['adminname'])){
    header("location: ".ADMINURL."");
}


if(isset($_POST['submit'])){
    if(empty($_POST['adminname']) OR empty($_POST['email']) OR empty($_POST['password'])){
        echo "<script>aler('one or more input are empty');</script>";
    }else{
        $adminname = $_POST['adminname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = $conn->prepare("INSERT into admins (email, adminname, mypassword) Values (:email, :adminname, :mypassword)");

        $insert->execute([
            ':email' => $email,
            ':adminname' => $adminname,
            ':mypassword' => password_hash($password,PASSWORD_DEFAULT),
        ]);
        header("location: ".ADMINURL."/admins/admins.php");
    }

}

?>



       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Admins</h5>
          <form method="POST" action="create-admins.php">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />
                 
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="adminname" id="form2Example1" class="form-control" placeholder="adminname" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
                </div>

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
<?php require( "../layouts/footer.php");?>  