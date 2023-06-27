<?php require("../include/header.php"); ?>
<?php require("../config/config.php"); ?>
<?php

  if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $delete = $conn->prepare("DELETE from  cart where id='$id'");
    $delete->execute();

  }



?>





<?php require("../include/footer.php"); ?>