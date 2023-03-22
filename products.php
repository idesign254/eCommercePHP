    <?php  require('includes/conn.php'); ?>

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
          echo '<script>alert ("Product id alreay added to Cart")</script>';
          echo '<script>window.location="test.php</script>';
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
            echo '<script>alert("Product has ben removed...!")</script>';
            echo '<script>window.location= test.php"</script>';
          }
        }
      }
    }
?>


<?php  include('includes/header.php'); ?>


	<div class="container" style="width:65%"><br>
      <?php
          $query = "SELECT * FROM product ORDER BY id ASC";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0){
            while ($row  = mysqli_fetch_array($result)){

      ?>
            <div class="col-md-3">
                <form method="post" action="test.php?action=add&id=<?php echo $row["id"] ?>">

                 <div class="product">
                      <img src="<?php echo $row["image"]; ?>" class="img-responsive" >
                      <h5 class="text-info"><?php echo $row["pName"]; ?></h5>
                      <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                      <input type="text" name="quantity" class="form-control" value="1">
                      <input type="hidden" name="hidden_name" value="<?php echo $row["pName"]; ?>">
                      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                      <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                    </div>
                </form>
              </div>
              <?php
            }
          }
        ?>

	</div>
<?php  include('includes/footer.php'); ?>


