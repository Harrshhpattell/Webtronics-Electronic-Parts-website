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
    <link rel="stylesheet" href="css/allcate.css">
</head>

<body>
    <!-- navigation -->
    <?php require('../include/header.php'); ?>
    <?php require("../config/config.php"); ?>
    <?php
    $rows = $conn->query("SELECT * from products where status = 1 AND category = 'sensor'");
    $rows->execute();

    $allRows = $rows->fetchAll(PDO::FETCH_OBJ);




    ?>







    <section class="sec1">
        <div class="sec_div">
            <p class="path">
                <a href="<?php echo APPURL; ?>">Home</a> >
                <a href="sensor.php">sensor</a>
            </p>
            <div class="sec_div_1">
                <img id="sensor" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/sensors.png" alt="sensor_logo">
                <div>
                    <h1><b> Sensors</b></h1>
                    <p id="head2">Devices used for detecting and measuring of some type of input from physical
                        environment and
                        converting the information into electrical signals</p>
                    <p id="head4">Sensors are devices used for detecting of some input from physical environment and
                        converting
                        the information into electrical signals. The input could be pressure, temperature, moisture,
                        flow, level, acceleration or any other environmental phenomena. The output is an electric signal
                        usually. It can be analog, digital or some specific output signal.</p>
                </div>
            </div>
            <hr id="hr_line">
        </div>
    </section>
    <section id="sec-prod">
    <?php foreach($allRows as $product) : ?>
      <div class="container1 product-list">
        <div class="row">
          <div class="col-lg-3 col-md-4 px-0">
            <img class="responsive" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/products/<?php echo $product->image; ?>" alt=""/>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="detail ml-1 mt-5">
              <h3><?php echo $product->name; ?></h3>
              <p class="price">Rs.<?php echo $product->price; ?>/item</p>
              <p class="descr">
                <?php echo $product->description; ?> 
              </p>
                <a href="<?php echo APPURL; ?>/shopping/single.php?id=<?php echo $product->id; ?>"><button class="button-28" role="button">More Details </button></a>


            </div>
          </div>
        </div>
    </div>
    <?php endforeach; ?>
    </section>


    <hr id="hr_line">
    <h1 id="Sen_Cat">Top manufacturers</h1>
    <section>
        <div class="manufacturer">
            <img class="company_logo" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/honeywell.png" alt="honeywell">
            <h2 class="company_name">Honeywell</h2>
        </div>
        <div class="manufacturer">
            <img class="company_logo" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/ssi tech.jpg" alt="SSI Technologies">
            <h2 class="company_name">SSI Technologies</h2>
        </div>
        <div class="manufacturer">
            <img class="company_logo" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/omron.png" alt="Omron">
            <h2 class="company_name">Omron</h2>
        </div>
        <div class="manufacturer">
            <img class="company_logo" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/Pepperl & Fuchs.png" alt="Pepperl & Fuchs">
            <h2 class="company_name">Pepperl & Fuchs</h2>
        </div>
        <div class="manufacturer">
            <img class="company_logo" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/Balluff.png" alt="Balluff">
            <h2 class="company_name">Balluff</h2>
        </div>
        <div class="manufacturer">
            <img class="company_logo" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/Telemecanique.png" alt="Telemecanique">
            <h2 class="company_name">Telemecanique</h2>
        </div>
    </section>
    <hr id="hr_line">


    <?php require('../include/footer.php'); ?>
</body>

</html>



