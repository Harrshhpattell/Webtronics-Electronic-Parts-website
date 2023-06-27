<?php require("config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="icon" href="<?php echo APPURL; ?>/admin-panel/products-admins/image/e.png">
  <title>WebTronic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="include/css/header_footer.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- navigation -->
  <?php require('include/header.php'); ?>
  <!-- complete navigation -->
  <section class="section2">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/4.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <h1 class="heading_categories"> Categories </h1>
  <section class="section3">
    <div class="categories"><a href="allcate/test_equipment.php">
        <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/test-equipment.png"
          alt="Test-equipment">
        <h4>Test-equipment</h4>
      </a>
    </div>
    <div class="categories"><a href="allcate/power-products.php">
        <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/power-products.png"
          alt="power-products">
        <h4>Power-products</h4>
      </a>
    </div>
    <div class="categories">
      <a href="allcate/Integrated-circuits(ICs).php">
        <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/integrated-circuits-ics.png"
          alt="integrated-circuits-ics">
        <h4 id="IC">Integrated-circuits(ICs)</h4>
      </a>
    </div>
    <div class="categories"><a href="allcate/cables-and-wire.php">
        <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/cables-and-wire.png"
          alt="cables-and-wire">
        <h4>Cables and Wire</h4>
      </a>
    </div>
    <div class="categories"><a href="allcate/passive-components.php">
        <img id="passive" src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/passive-components.png"
          alt="passive-components">
        <h4>Passive Components</h4>
      </a>
    </div>
    <div class="categories"><a href="allcate/sensor.php">
        <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/sensors.png" alt="sensors">
        <h4>Sensors</h4>
      </a>
    </div>
    <div class="categories"><a href="allcate/connectors.php">
        <img src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/connectors.png" alt="connectors">
        <h4>Connectors</h4>
      </a>
    </div>
  </section>

  <section class="section4">
    <h2 class="sec_h2">Product Spotlight</h2>
    <div class="product_spotlight">
      <img id="product_spot"
        src="<?php echo APPURL; ?>/admin-panel/products-admins/image/category/product_spotlight.png"
        alt="product_spotlight">
      <br>
      <hr id="vr">
      <div class="communication">
        <h3><b>Communication Modules</b></h3><br>
        <p>Communication modules typically include a microcontroller, RF front-end (e.g. WiFi, Bluetooth, 2G/3G/5G,
          NB-IoT, LoRaWan), plus all required peripherals and memory to provide spec-compliant, certified connectivity
          functionality. These modules are ideal for designing IoT and Cloud connected products, and applicable through
          all phases of development from prototyping to mass production. <b>WebTronic</b> offers a wide range of
          communication modules from industry leading distributors such as Mouser, Digi-key, Arrow Electronics, Avnet
          and several more.</p>
      </div>
    </div>
    <svg viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" style="height: 200px;  display:block; margin:auto; ">
      <path d="
          M 0, 84
          C 0, 52.08 52.08, 0 84, 0
          S 168, 52.08 168, 84
              115.92, 168 84, 168
              0, 115.92 0, 84
      " fill="#ECF9FF" transform="rotate(
          13,
          100,
          100
      ) translate(
          16
          16
      )"></path>
    </svg>
  </section>

  <!-- footer  -->
  <?php require('include/footer.php'); ?>


</body>

</html>