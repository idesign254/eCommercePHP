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



<!-- ============================================== HEADER : END ============================================== -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row outer-bottom-sm'>
			
			<div class='col-md-9'>
					<!-- ========================================== SECTION – HERO ========================================= -->



				<div class="search-result-container">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
								<div class="row">									
			<?php
			$find="%{$_POST['product']}%";
$ret=mysqli_query($con,"SELECT * FROM products WHERE pName LIKE '$find' LIMIT 2");
$num=mysqli_num_rows($ret);
if($num>0)
{
while ($row=mysqli_fetch_array($ret)) 
{?>							
			<div class='col-md-9'>
				<div class="row  wow fadeInUp">
 			

					<div class="fh5co-blog animate-box">
						 <?php echo "<img src='images/".$row['productImage1']."' >"; ?>
						<div class="blog-text">
							<h3 >Name :<?php echo htmlentities($row['pName']);?></h3>							
							<span class="posted_on">Price :<?php echo htmlentities($row['price']);?></span>
							<p>Availability :<?php echo htmlentities($row['productAvailability']);?></p>
							<p>Shop :<?php echo htmlentities($row['shop']);?></p>
							<p>description :<?php echo htmlentities($row['description']);?></p>
							<p>category :<?php echo htmlentities($row['category']);?></p>
							<a  data-toggle="tooltip" data-placement="right" title="Wishlist"
							 href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist">Wish</a>
				<form method="post" action="">
				<input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />		
					 <button type="submit" style="margin-top: 5px;" class="btn btn-success">Buy Now</button>
                </form>
						</div> 
					</div>
				
				
							
						</div>
					</div>
			
		
		
					
			</div>
			</div>
		</div>
	  <?php } } else {?>
	
		<div class="col-sm-6 col-md-4 wow fadeInUp"> <h3>No Product Found</h3>
		</div>
		
<?php } ?>	
		
								</div><!-- /.row -->
							</div><!-- /.category-product -->
						
						</div><!-- /.tab-pane -->
						
				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div>
<?php include('includes/footer.php');?>
