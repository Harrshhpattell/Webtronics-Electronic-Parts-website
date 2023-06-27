<?php require( "../layouts/header.php");?>  
<?php require( "../../config/config.php");?>

<?php

if(isset($_POST['submit'])){
  if(empty($_POST['name']) OR empty($_POST['description']) OR empty($_POST['price'])){
    echo "<script>alert('one or more input are empty');</script>";
  }else{
    $category_name = $_POST['category_name'];
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $features = $_POST['features'];

    $dir_image ="image/products/" . basename($image);



    $insert = $conn->prepare("INSERT INTO products (category, name, image, price, description, features) VALUES (:category, :name, :image, :price, :description, :features)");
    $insert->execute([
      ":category" => $category_name,
      ":name" => $name,
      ":image" => $image,
      ":price" => $price,
      ":description" => $description,
      ":features" => $features,
    ]);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $dir_image)){
      header("location: ".ADMINURL."/products-admins/show-products.php");
    }
  }
}

?>

       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Products</h5>
              <form method="POST" action="create-products.php" enctype="multipart/form-data">

              <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Category</label>
                    <select name="category_name" class="form-control" id="exampleFormControlSelect1">
                      <option>--select category--</option>
                      <option value="sensor">Sensor</option>
                      <option value="test-equipment">Test-Equipment</option>
                      <option value="power-products">Power-Products</option>
                      <option value="integrated-circuits(ICs)">Integrated-circuits(ICs)</option>
                      <option value="cables-and-wire">Cables and Wire</option>
                      <option value="passive-components">Passive Components</option>
                      <option value="connectors">Connectors</option>
                    </select>
                  </div>

                <div class="form-outline mb-4 mt-4">
                  <label>Name</label>

                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                </div>

                <div class="form-outline mb-4 mt-4">
                    <label>Price</label>

                    <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="description" placeholder="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Features</label>
                    <textarea name="features" placeholder="features" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>

                <div class="form-outline mb-4 mt-4">
                    <label>Image</label>
                    <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" />
                </div>

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
              </form>

            </div>
          </div>
        </div>
      </div>
<?php require("../layouts/footer.php"); ?>