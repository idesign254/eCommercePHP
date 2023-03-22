<?php require('includes/conn.php'); ?>

<?php require('includes/header.php'); ?>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/slider_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Get up to 30% Off New Arrivals</h1>
							<h2>SPRING / SUMMER COLLECTION 2019 </h2>
							<p><a href="shop.php" class="btn btn-primary">shop now</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/dumbbell.svg" alt=""></span>
						<h3>Weight Lifting</h3>
						<p>617 products - Strength Training Equipment. ... Weights 617 products found. ... Generic 1 pair Fitness / Gym Weightlifting Strap Wrist Professional </p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/exercise.svg" alt=""></span>
						<h3>Gym Accessories</h3>
						<p>High Quality Gym Equipment Wholesale, Find TZ Fitness For Quick Result Now! Gym Equipment Packages Suppliers</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/yoga-carpet.svg" alt=""></span>
						<h3>Kitchen </h3>
						<p>Deliver goods to our customers all over the world with speed and precision. Kitchen, Dining & Bar, a wide selection of products at affordable prices delivered to you.</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-trainer">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Fashion Expert</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/banner_1.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Women's</a></h3>
							<span>Fashion Shows</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/banner_2.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Accessories</a></h3>
							<span>Stylistic</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/banner_3.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Men's</a></h3>
							<span>Be Cool</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	



	<?php //  require('parts/stylish.php'); ?>
	
	<div id="fh5co-trainer">
		<div class="container">

			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Top Sales</h2>					
				</div>
			</div>

			<div class="row">

				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<?php
          $query = "SELECT * FROM products WHERE category = '11' LIMIT 4";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0){
            while ($row  = mysqli_fetch_array($result)){

      ?>

<!-- <?php
	// define("IMAGE_BASE_URL", "http://ecommerce/dashboardpanel/images/sales/");
	// $imagePath = IMAGE_BASE_URL.$row['productImage1'];
	// echo "<img src='$imagePath'>".$row['productImage1']."' >"; 
?> -->

	<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
		<div class="img-responsive"> 
		<?php 
    echo "<img src='$imagePath".$row['productImage1']."' >"; 
?>

				</div> 
			</a>
		 <h3 >Ksh.<?php echo $row["price"]; ?></h3>
			<div class="title">
				<h3><a href="#">Women's</a></h3>
					<span>Fashion Shows</span>
					</div>	
				 <?php
            }
          }
        ?>									
					</div>
				</div>

				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<?php
          $query = "SELECT * FROM products WHERE category = '22' LIMIT 4";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0){
            while ($row  = mysqli_fetch_array($result)){

     						 ?>
						<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
						     <div class="img-responsive"> 
								<?php 
								echo "<img src='$imagePath".$row['productImage1']."' >";
								?>  </div> </a>
						<h3 >Ksh.<?php echo $row["price"]; ?></h3>
						<div class="title">
							<h3><a href="#">Men's</a></h3>
							<span>Fashion Shows</span>
						</div>	
						 <?php
            }
          }
        ?>									
					</div>
				</div>

				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<?php
          $query = "SELECT * FROM products WHERE category = '33' LIMIT 4";
          $result = mysqli_query($con,$query);
          if(mysqli_num_rows($result) > 0){
            while ($row  = mysqli_fetch_array($result)){

      ?>
						<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
						     <div class="img-responsive"> 
								<?php echo "<img src='$imagePath".$row['productImage1']."' >"; ?>  
							</div> </a>
						<h3 >Ksh.<?php echo $row["price"]; ?></h3>
						<div class="title">
							<h3><a href="#">Cool</a></h3>
							<span>Fashion Shows</span>
						</div>	
						 <?php
            }
          }
        ?>									
					</div>
				</div>		

			</div>
		</div>
	</div>
	


<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">

							<?php 
		             $query=$con->query("SELECT * FROM testimonial");             
                 $rowuser=mysqli_fetch_array($query);
 								?>

							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
									    <?php echo "<img src='images/".$rowuser['images']."' >"; ?> 
									</figure>
									
									<span><?php echo $rowuser['UserEmail'];  ?>  </span>
									<blockquote>
										<p>&ldquo;<?php echo $rowuser['Testimonial'];  ?> .&rdquo;</p>
									</blockquote>
									<span><?php echo $rowuser['PostingDate'];  ?>  </span>
								</div>
							</div>
							
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<?php echo "<img src='images/".$rowuser['images']."' >"; ?> 
									</figure>
									
									<span><?php echo $rowuser['UserEmail'];  ?>  </span>
									<blockquote>
										<p>&ldquo;<?php echo $rowuser['Testimonial'];  ?> .&rdquo;</p>
									</blockquote>
									<span><?php echo $rowuser['PostingDate'];  ?>  </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php   require('includes/footer.php'); ?>