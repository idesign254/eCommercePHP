<?php require('includes/conn.php'); ?>

<?php require('includes/header.php'); ?>

<!-- New Arrivals -->
       <?php
    if (isset($_POST["add"])){
      if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)){
          $count = count( $_SESSION["cart"]);
          $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
          );
          $_SESSION["cart"][$count] = $item_array;
         // echo '<script>alert ("Product added to Cart")</script>';
          echo '<script>window.location="shop.php</script>';
        }
      }else{
        $item_array = array(
          'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
      }
    }

    if(isset($_GET["action"])){
      if($_GET["action"] == "delete"){
        foreach ($_SESSION["cart"] as $keys => $value) {
          if($value["product_id"] == $_GET["id"]){
            unset($_SESSION["cart"][$keys]);
         //   echo '<script>alert("Product has ben removed...!")</script>';
            echo '<script>window.location= cart-details.php"</script>';
          }
        }
      }
    }
?>

	

<form name="search" method="post" action="search-result.php" style="padding-left: 20px">
        <div class="control-group">

            <input class="search-field" placeholder="Search here..." name="product" required="required" />

            <button class="btn btn-success" type="submit" name="search">Search</button>    

        </div>
    </form>
	     


  <div class="container" style="width:100%">
     <h3 class="title2"> Male / Female</h3>
      <?php
          $query = "SELECT * FROM product WHERE category = '3' ";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0){
            while ($row  = mysqli_fetch_array($result)){

      ?>
            <div class="col-md-4">
                <form method="post" action="shop.php?action=add&id=<?php echo $row["id"] ?>">

                 <div class="product" style="height: 100%">
                     <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                      <img src="<?php echo $row["image"]; ?>" class="img-responsive" >  </a>
                      <h5 class="text-info"><?php echo $row["pName"]; ?></h5>
                      <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                      <h5 class="text"><?php echo $row["description"]; ?></h5>
                      <input type="text" name="quantity" class="form-control" value="1">
                      <input type="hidden" name="hidden_name" value="<?php echo $row["pName"]; ?>">
                      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                      <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                    </div>
                </form><br>
              </div>
              <?php
            }
          }
        ?>

  </div><br>
  
     <div class="container" style="width:100%">
    <h3 class="title2"> Posted Items</h3>
      <?php
          $query = "SELECT * FROM products";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0){
            while ($row  = mysqli_fetch_array($result)){

      ?>
            <div class="col-md-4">
                <form method="post" action="shop.php?action=add&id=<?php echo $row["id"] ?>">

                 <div class="product"  style="height: 100%">
                      <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                      <img src="<?php echo $row["productImage1"]; ?>" class="img-responsive" >  </a>
                      <h5 class="text-info"><?php echo $row["pName"]; ?></h5>
                      <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                      <h5 class="text"><?php echo $row["description"]; ?></h5>
                      <input type="text" name="quantity" class="form-control" value="1">
                      <input type="hidden" name="hidden_name" value="<?php echo $row["pName"]; ?>">
                      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                      <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                    </div>
                </form><br>
              </div>
              <?php
            }
          }
        ?>

  </div>
<br><br>
	
	<?php   //  require('includes/schedule.php'); ?>

		<?php   require('includes/footer.php'); ?>