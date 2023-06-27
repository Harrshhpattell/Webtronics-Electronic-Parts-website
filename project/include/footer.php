<?php
// define("APPURL", "http://localhost/DE/project");
?>
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
    <link rel="stylesheet" href="css/header_footer.css">
</head>

<body>

    <!-- footer  -->
    <footer>
        <section>
            <div id="containerFooter">

                <div id="webFooter">
                    <h3> Store </h3><br>
                    <p class="para">Test-equipment</p>
                    <p class="para">Sensors</p>
                    <p class="para">Cables and Wire</p>
                    <p class="para">Power-products</p>
                </div>
                <div id="webFooter">
                    <h3> helpful link </h3><br>
                    <p class="para"> home </p>
                    <p class="para"><a href="<?php echo APPURL; ?>/about.php" style="text-decoration: none; color:#fff;" > About Us </a></p>
                    <p class="para"><a href="<?php echo APPURL; ?>/contact.php" style="text-decoration: none; color:#fff;" > contact </a></p>
                </div>
                <div id="webFooter">
                    <h3> Manufacturers </h3><br>
                    <p class="para"> Texas Instruments </p>
                    <p class="para"> SSI Technologies </p>
                    <p class="para"> Telemecanique </p>
                    <p class="para"> Omron </p>
                    <p class="para"> + many more </p>
                </div>
                <div id="webFooter">
                    <h3> address </h3><br>
                    <p class="para"> building 101 </p>
                    <p class="para"> central avenue </p>
                    <p class="para"> la - 380000 </p>
                    <p class="para"> India </p>
                </div>
            </div>
            <div id="credit"><a href="<?php echo APPURL; ?>"> © WebTronic </a> &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp <a href="<?php echo APPURL; ?>"
                    target="_blank"> WEBSITE </a></div>
        </section>
    </footer>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!----------->
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open");
        }
    </script>
</body>

</html>