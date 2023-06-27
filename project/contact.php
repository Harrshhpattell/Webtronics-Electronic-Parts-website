<?php require( "config/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us (WebTronic)</title>
    <link rel="shortcut icon" type="image/jpg" href="css/images/news2.png"/>
    <!-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
    </style> -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="include/css/header_footer.css">
    </head>
    <body>
        <!-- navigation -->
        <?php require('include/header.php');?>
        <!-- complete navigation -->
        
        <section>
            <div class="container">
                <div class="contactInfo"> 
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="css/images/location.png"></span>
                                <span>BUILDING 101 CENTRAL AVENUE<br>
                                      LA - 380000<br>
                                    India</span>
                                </span>
                            </li>
                            <li>
                                <span><img src="css/images/mail.png"></span>
                                <span><a href = "mailto: webtronics@gmail.com">WebTronics@gmail.com</a></span>
                            </li>
                            <li>
                                <span><img src="css/images/call.png"></span>
                                <span>123-456-0987</span>
                            </li>

                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="#"><img src="css/images/1.png"></a></li>
                        <li><a href="#"><img src="css/images/3.png"></a></li>
                        <li><a href="#"><img src="css/images/2.png"></a></li>
                        <li><a href="#"><img src="css/images/5.png"></a></li>  
                    </ul>
                </div>
                <form action="contact.php" method="POST" style="background: none; border: none;">
                    <div class="contactForm">
                        <h2>Send a Message (We'll get back to you soon!)</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="fname" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="lname" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" name="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="number" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="message" required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
               </form>
          </div>     
                    
             
        </section>
        
        
    </body>
</html>
<?php
        if(isset($_POST['submit'])){
            if(empty($_POST['fname']) OR empty($_POST['email']) OR empty($_POST['number']) OR empty($_POST['message'])){
                echo "<script>alert('one or more input are empty');</script>";
            }else{
                $username = $_SESSION['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $message = $_POST['message'];
        
                $insert = $conn->prepare("INSERT into contact  (username, name, email, number, message) Values (:username, :name, :email, :number, :message)");
        
                $insert->execute([
                    ':username' => $username,
                    ':name' => $fname." ".$lname,
                    ':email' => $email,
                    ':number' => $number,
                    ':message' => $message,
                ]);
                echo "<script>alert('We'll get back to you soon!');</script>";
            }
        
        }
?>