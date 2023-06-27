<?php require("../config/config.php");
// error_reporting(0);
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
    <link rel="stylesheet" href="../include/css/header_footer.css">
</head>

<body>
    <!-- navigation -->
    <?php require('../include/header.php'); ?>
    <!-- complete navigation -->



    <?php

    $products = $conn->query("SELECT * from cart where user_id = '$_SESSION[user_id]'");
    $products->execute();

    $allProducts = $products->fetchAll(PDO::FETCH_OBJ);

    //price
    if (isset($_POST['submit'])) {
        $price = $_POST['price'];

        $_SESSION['price'] = $price;
        header("location: checkout.php");

    }


    ?>

    <div class="container mb-4">
        <div class="row d-flex justify-content-center align-items-center h-100 mt-5 mt-5">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <!-- <h6 class="mb-0 text-muted"> php echo $getNumber->num_products; ?> items</h6> -->
                                    </div>


                                    <table class="table" height="190">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Update</th>
                                                <th scope="col"><button
                                                        class="btn btn-danger text-white delete-all">Clear</button></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (count($allProducts) > 0): ?>
                                                <?php foreach ($allProducts as $product): ?>
                                                    <tr class="mb-4">
                                                        <th scope="row">
                                                            <?php echo $product->pro_id; ?>
                                                        </th>
                                                        <td><img width="100" height="100"
                                                                src="<?php echo APPURL; ?>/admin-panel/products-admins/image/products/<?php echo $product->pro_image; ?>"
                                                                class="img-fluid rounded-3" alt="error">
                                                        </td>
                                                        <td style="font-family: 'Montserrat', sans-serif;">
                                                            <?php echo $product->pro_name; ?>
                                                        </td>
                                                        <td class="pro_price" style="font-family: 'Montserrat', sans-serif;">
                                                            <?php echo $product->pro_price; ?>
                                                        </td>
                                                        <td style="font-family: 'Montserrat', sans-serif;"><input id="form1"
                                                                min="1" name="quantity"
                                                                value="<?php echo $product->pro_amount; ?>" type="number"
                                                                class="form-control form-control-sm pro_amount" /></td>
                                                        <td class="total_price" style="font-family: 'Montserrat', sans-serif;">
                                                            <?php echo $product->pro_price * $product->pro_amount; ?>
                                                        </td>

                                                        <td><button value="<?php echo $product->id; ?>"
                                                                class="btn btn-warning text-white btn-update"><i
                                                                    class="fas fa-pen"></i> </button></td>

                                                        <td><button value="<?php echo $product->id; ?>"
                                                                class="btn btn-danger text-white     btn-delete"><i
                                                                    class="fas fa-trash-alt"></i> </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>

                                            <?php else: ?>
                                                <div class="alert alert-danger bg-danger text-white">
                                                    ⚠ There is no products in cart
                                                </div>
                                            <?php endif; ?>
                                            <!-- <tr>
                        <th scope="row">2</th>
                        <td><img width="100" height="100"
                        src="../images/node.png"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </td>
                        <td>Node Book</td>
                        <td>$20</td>
                        <td><input id="form1" min="1" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" /></td>
                        <td>$120</td>
                        <td><a href="#" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i> </a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td><img width="100" height="100"
                        src="../images/html5.jpg"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </td>
                        <td>HTML5 Book</td>
                        <td>$20</td>
                        <td><input id="form1" min="1" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" /></td>
                        <td>$120</td>
                        <td><a href="#" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i> </a></td>
                      </tr> -->
                                        </tbody>
                                    </table>
                                    <a href="<?php echo APPURL; ?>" class="btn btn-success text-white"><i
                                            class="fas fa-arrow-left"></i>
                                        Continue Shopping</a>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">


                                    <form method="post" action="cart.php">
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5 class="full_price" style="font-family: 'Montserrat', sans-serif;"></h5>
                                            <input class="inp_price" name="price" type="hidden">
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Checkout</button>
                                    </form>

                                </div>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>🤩🎉</strong> now we are accepting all payment gateway...
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php require('../include/footer.php'); ?>
    <script>
        $(document).ready(function () {

            $(".pro_amount").mouseup(function () {

                // total price 

                var $el = $(this).closest('tr');



                var pro_amount = $el.find(".pro_amount").val();
                var pro_price = $el.find(".pro_price").html();

                var total = pro_amount * pro_price;
                $el.find(".total_price").html("");

                $el.find(".total_price").append(total + 'Rs.');

                //finish total price

                $(".btn-update").on('click', function (e) {

                    var id = $(this).val();


                    $.ajax({
                        type: "POST",
                        url: "update-item.php",
                        data: {
                            update: "update",
                            id: id,
                            pro_amount: pro_amount
                        },

                        success: function () {
                            // alert("done");
                            // reload();
                        }
                    })
                });


                fetch();
            });


            $(".btn-delete").on('click', function (e) {

                var id = $(this).val();


                $.ajax({
                    type: "POST",
                    url: "delete-item.php",
                    data: {
                        delete: "delete",
                        id: id
                    },

                    success: function () {
                        alert("product deleted successfully");
                        reload();
                    }
                })
            });


            $(".delete-all").on('click', function (e) {


                $.ajax({
                    type: "POST",
                    url: "delete-all-item.php",
                    data: {
                        delete: "delete"

                    },

                    success: function () {
                        alert("all product deleted successfully");
                        reload();
                    }
                })
            });


            fetch();

            function fetch() {

                setInterval(function () {
                    var sum = 0.0;
                    $('.total_price').each(function () {
                        sum += parseFloat($(this).text());
                    });
                    $(".full_price").html("Rs." + sum);
                    $(".inp_price").val(sum);

                }, 4000);
            }

            function reload() {


                $("body").load("cart.php")

            }
        });
    </script>

</body>

</html>


<!-- jquery -->