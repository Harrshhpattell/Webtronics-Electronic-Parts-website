<?php require("../include/header.php"); ?>
<?php require("../config/config.php"); ?>
<?php

  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $pro_amount = $_POST['pro_amount'];

    $update = $conn->prepare("UPDATE cart SET pro_amount='$pro_amount' where id='$id'");
    $update->execute();

  }



?>





<?php require("../include/footer.php"); ?>