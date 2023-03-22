<?php
include('includes/conn.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$pName = $row['pName'];
$code = $row['code'];
$price = $row['price'];
$productImage1 = $row['productImage1'];
 
$cartArray = array(
 $code=>array(
 'pName'=>$pName,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'productImage1'=>$productImage1)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
   // echo 'product added';
 }
 
 }
}
?>

<?php require('includes/header.php'); ?>

       
<div id="fh5co-trainer">
    <div class="container">
      
      <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
         <form name="search" method="post" action="search-result.php" >
        <div class="control-group">
            <input class="search-field" placeholder="Search here..." name="product" required="required" />
            <button class="btn btn-success" type="submit" name="search">Search</button>
        </div>
    </form>          
        </div>
      </div>
      <div class="row">

         <div class="col-md-4 col-sm-4 animate-box">
          <div class="trainer">
            <?php
          $result = mysqli_query($con,"SELECT * FROM `products` WHERE category = '11'");
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <form method="post" action="">
              <input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />

            <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
              <?php echo "<img src='$imagePath".$row['productImage1']."' >"; ?></a>

            <h5 ><?php echo $row["pName"]; ?></h5>
            <h3 >Ksh.<?php echo $row["price"]; ?></h3>
            <button type="submit" style="margin-top: 5px;" class="btn btn-success">Buy Now</button>            
            <div class="title">
              <h3><a href="#">Ladies</a></h3>
              <span>Fashion Shows</span>
            </div>
            </form>  
             <?php
            }
          
        ?>                  
          </div>
        </div>

        <div class="col-md-4 col-sm-4 animate-box">
          <div class="trainer">
            <?php
          $result = mysqli_query($con,"SELECT * FROM `products` WHERE category = '22'");
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <form method="post" action="">
              <input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />

              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
              <?php echo "<img src='$imagePath".$row['productImage1']."' >"; ?></a>

            <h5 ><?php echo $row["pName"]; ?></h5>
            <h3 >Ksh.<?php echo $row["price"]; ?></h3>
            <button type="submit" style="margin-top: 5px;" class="btn btn-success">Buy Now</button>            
            <div class="title">
              <h3><a href="#">Men's</a></h3>
              <span>Fashion Shows</span>
            </div>
            </form>  
             <?php
            }
          
        ?>                  
          </div>
        </div>

        <div class="col-md-4 col-sm-4 animate-box">
          <div class="trainer">
            <?php
          $result = mysqli_query($con,"SELECT * FROM `products` WHERE category = '33'");
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <form method="post" action="">
              <input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />

              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
              <?php echo "<img src='$imagePath".$row['productImage1']."' >"; ?></a>

            <h5 ><?php echo $row["pName"]; ?></h5>
            <h3 >Ksh.<?php echo $row["price"]; ?></h3>
            
            <button type="submit" style="margin-top: 5px;" class="btn btn-success">Buy Now</button>            
            <div class="title">
              <h3><a href="#">Fashion</a></h3>
              <span>Fashion Shows</span>
            </div>
            </form>  
             <?php
            }
          
        ?>                  
          </div>
        </div> 
        
           
      </div>
    </div>
  </div>
  
  
  <?php   //  require('includes/schedule.php'); ?>

    <?php   require('includes/footer.php'); ?>