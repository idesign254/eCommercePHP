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
 }
 
 }
}
?>

<?php require('includes/header.php'); ?>


<?php 
 if (isset($_POST["add"])){
      if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)){
          $count = count( $_SESSION["cart"]);
          $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_GET["pName"],
            'product_price' => $_GET["price"],
            'item_quantity' => $_GET["quantity"],
          );
          $_SESSION["cart"][$count] = $item_array;
          echo '<script>alert ("Product added to Cart")</script>';
         // echo '<script>window.location="shop.php</script>';
        }
      }else{
        $item_array = array(
          'product_id' => $_GET["id"],
            'pName' => $_GET["pName"],
            'product_price' => $_GET["price"],
            'item_quantity' => $_GET["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
      }
    }
$pid=intval($_GET['pid']);
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
  echo "<script> window.location.assign('user.php'); </script>";
}
else
{
mysqli_query($con,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','$pid')");
echo "<script>alert('Product added in wishlist');</script>";
  //echo "<script> window.location.assign('wish.php'); </script>";

}
}

?>

<!-- ==============================================  ============================================== -->


<br>
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product outer-bottom-sm '>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">


				</div>
			</div>
<?php 
$ret=mysqli_query($con,"SELECT * FROM products where id='$pid' ");
while($row=mysqli_fetch_array($ret))
{
?>

			<div class='col-md-12'>
				<div class="row  wow fadeInUp">
 			

					<div class="fh5co-blog animate-box">
          
            <?php echo "<img src='$imagePath".$row['productImage1']."' >";  ?>

						<div class="blog-text">
							<h1>Name :<?php echo htmlentities($row['pName']);?></h1>
              <span class="posted_on">Price :<?php echo htmlentities($row['price']);?></span>
							<p>Availability :<?php echo htmlentities($row['productAvailability']);?></p>
							<p>Shop :<?php echo htmlentities($row['shop']);?></p>
							<p>description :<?php echo htmlentities($row['description']);?></p>
							<p>category :<?php echo htmlentities($row['category']);?></p>
							<button class="btn btn-danger">
                <a  data-toggle="tooltip" data-placement="right" title="Wishlist"
							 href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" style="color: #ffffff">Add to Wish</a>
              </button>
							<form method="post" action="">
						<input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />		
					 <button type="submit" style="margin-top: 5px;" class="btn btn-success"> Buy Now </button>
                		</form>																					
								</div> 
							</div>		
						</div>
					</div>
				</div>

						</div>
					</div>

<?php  } ?>

<?php include('includes/footer.php');?>

