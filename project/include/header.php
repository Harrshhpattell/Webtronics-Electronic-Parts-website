<?php
session_start();
define("APPURL", "http://localhost/DE/project");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="../image/e.png">
    <title>WebTronic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- navigation -->
    <section class="section1">
        <nav>
            <img src="<?php echo APPURL; ?>/logo/2EBR.png" alt="logo">
            <ul class="nav" id="subMenu">

                <li><a href="<?php echo APPURL; ?>">Home</a></li>
                <li><a href="<?php echo APPURL; ?>/contact.php">Contact Us</a></li>

                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>

                

                <?php else: ?>

                <li><a href="<?php echo APPURL; ?>/auth/login.php">Log In</a></li>
                <li><a href="<?php echo APPURL; ?>/auth/register.php">register</a></li>
                <div><img src="<?php echo APPURL; ?>/logo/2EBR.png"
                        alt="logo"></div>
                <?php endif; ?>
            </ul>
            <div class="permanent">
                <a href="<?php echo APPURL; ?>/shopping/cart.php"><i class="bi bi-cart-fill"></i></a>
                <a href=""><i class="bi bi-person-circle"></i></a>
                
                
                <div id="menu"><i class="bi bi-list" onclick=toggleMenu()></i></div>
            </div>
        </nav>
    </section>
    <!-- complete navigation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <script>
        let subMenu = document.getElementById("subMenu");
         
         function toggleMenu(){
            subMenu.classList.toggle("open");
         }
    </script>
</body>

</html>