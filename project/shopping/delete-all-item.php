<?php require("../include/header.php"); ?>
<?php require("../config/config.php"); ?>
<?php

  if(isset($_POST['delete'])){


    $delete = $conn->prepare("DELETE from  cart where user_id = '$_SESSION[user_id]'");
    $delete->execute();

  }



?>





<?php require("../include/footer.php"); ?>