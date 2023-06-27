<?php require( "config/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="<?php echo APPURL; ?>/admin-panel/products-admins/image/e.png">
    <title>WebTronic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="include/css/header_footer.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
  <!-- navigation -->
  <?php require('include/header.php');?>
<!-- complete navigation -->
<div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-img">
                        <img src="https://images.pexels.com/photos/6974258/pexels-photo-6974258.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-1">
                    <div class="about-text">
                        <h2>About Us</h2>
                        <p>Welcome to our website! We are a leading provider of high-quality electronic parts and equipment, serving both hobbyists and professionals alike. Our mission is to provide reliable and affordable parts that help our customers bring their projects to life.</p>
                        <p><mark>WebTronics</mark> , we believe in the power of technology to transform the world around us. Whether you're building a robot, programming a microcontroller, or working on an electronics repair, we have the parts and tools you need to succeed.</p>
                        <p>Our team consists of experienced engineers and enthusiasts who are passionate about electronics and love to help others learn and grow. We are constantly exploring new technologies and expanding our product offerings to stay ahead of the curve.</p>
                        <p>We take pride in our commitment to customer satisfaction. We strive to provide fast and reliable shipping, excellent customer service, and competitive prices on all of our products. If you have any questions or concerns, please don't hesitate to contact us.</p>
                        <p>Thank you for choosing <mark>WebTronics</mark> as your source for electronic parts and equipment. We look forward to serving you and helping you achieve your electronic dreams!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- footer  -->
       <?php require('include/footer.php');?>

       
</body>
</html>