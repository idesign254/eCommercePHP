<?php require('includes/conn.php');
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

<div class="super_container">
	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->

					

						<!-- Product 2 -->

						<div class="product-item men">
							<div class="product product_filter">
								<?php
          $result = mysqli_query($con,"SELECT * FROM `products` WHERE category = '1'");
          while($row = mysqli_fetch_assoc($result)){
            ?>                  
            					<form method="post" action="">
              <input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />
								<div class="product_image">
					 <img src="http://localhost/Merushops/m3/images/<?php echo $row['productImage1'];?>">
								</div>
								<div class="favorite"></div>
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span>
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html"><?php echo $row["pName"]; ?></a></h6>
									<div class="product_price">Ksh.<?php echo $row["price"]; ?></div>
								</div>
							
							<button type="submit" class="red_button add_to_cart_button">add to cart</button>
							   </form>  
						<?php } ?>  
						</div>     
						</div>

						  

						<!-- Product 3 -->
						<div class="product-item women">
							<div class="product product_filter">
								<?php
          $result = mysqli_query($con,"SELECT * FROM `products` WHERE category = '2'");
          while($row = mysqli_fetch_assoc($result)){
            ?>                  
            					<form method="post" action="">
              <input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />
								<div class="product_image">
					 <img src="http://localhost/Merushops/m3/images/<?php echo $row['productImage1'];?>">
								</div>
								<div class="favorite"></div>
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span>
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html"><?php echo $row["pName"]; ?></a></h6>
									<div class="product_price">Ksh.<?php echo $row["price"]; ?></div>
								</div>
							
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							   </form>  
						<?php } ?>  
						</div>     
						</div>

						<!------>
						<div class="product-item accessories">
							<div class="product product_filter">
								<?php
          $result = mysqli_query($con,"SELECT * FROM `products` WHERE category = '3'");
          while($row = mysqli_fetch_assoc($result)){
            ?>                  
            					<form method="post" action="">
              <input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />
								<div class="product_image">
					 <img src="http://localhost/Merushops/m3/images/<?php echo $row['productImage1'];?>">
								</div>
								<div class="favorite"></div>
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span>
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html"><?php echo $row["pName"]; ?></a></h6>
									<div class="product_price">Ksh.<?php echo $row["price"]; ?></div>
								</div>
							
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							   </form>  
						<?php } ?>  
						</div>     
						</div>

												
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Blogs -->



	<!-- Newsletter -->


	<!-- Footer -->


</div>




	<?php   require('includes/footer.php'); ?>