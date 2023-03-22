<?php
$ProfileimagePath = 'http://ecommerce/images/profile_pics';
$imagePath = 'http://ecommerce/images/sales/';

if(isset($_POST['emailsubscibe'])) {
$subscriberemail = $_POST['subscriberemail'];
$sql=mysqli_query($con,"SELECT SubscriberEmail FROM subscribers WHERE SubscriberEmail='$subscriberemail'");
if(mysqli_num_rows($sql) > 0){
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$query=mysqli_query($con,"INSERT INTO subscribers(SubscriberEmail)VALUES('$subscriberemail')");
	if($query){
echo "<script>alert('Subscribed successfully.');</script>";
	}
	else {
echo "<script>alert('Something went wrong. Please try again');</script>";
	}
 }
}
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Meru Shops</title>
	<!---Favicon icon -->
      <link rel="icon" type="icon" href="images/logo.png" alt="MMDTECH LOGO">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="merushops" />
	<meta name="keywords" content="mmdtech projects" />
	<meta name="author" content="mmdtech.co.ke" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
<!----Favicon icon -->
      <link rel="icon" type="icon" href="images/mmd.png" alt="MMDTECH LOGO">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/styles.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation" >
		<div class="top" style="background: #1e1e27;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">
                  <?php 
                  if(strlen($_SESSION['login'])){  
             ?>
         <?php echo htmlentities($_SESSION['username']);?> :
        <?php   
          } else{
        //    echo ("Not logged In");
            print "---";
          }
                ?>

						<ul class="fh5co-social">
							<li><a href="logout.php"><i class="icon-log-out" onclick="return confirm('Confirm Logout');"></i></a></li>
							<li><a href="user.php"><i class="icon-man"></i></a></li>
							<li><a href="dashboardpanel/"><i class="icon-tools"></i></a></li>
							<li class="checkout">
                  <a href="cart-details.php">
                    <i class="icon-shopping-cart" aria-hidden="true"></i>
                    <span id="checkout_items" class="checkout_items"><?php if($_SESSION["shopping_cart"]){ echo count($_SESSION["shopping_cart"]);}else{echo "0";}  ?>
                      
                    </span>
                  </a>
                </li>

							<li id="demo" style="color: white">
          <script>
        var myVar = setInterval(myTimer, 1000);

        function myTimer() {
          var d = new Date();
          document.getElementById("demo").innerHTML = d.toLocaleTimeString();
        }
        </script>
                </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php">Meru<span style="color: #1e1e27">shop</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="sales.php">Sales</a></li>
							<li><a href="posted.php">Posted</a></li>
							<li><a href="wish.php">Wish</a></li>
							<li><a href="myorders.php">Orders</a></li>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="post-testimonial.php">Testimonial</a></li>
						<!---	<li class="has-dropdown">
								<a href="blog.php">Blog</a>
								<ul class="dropdown">
									<li><a href="https://www.kilimall.co.ke/">Kilimall</a></li>
									<li><a href="https://www.alibaba.com/">Alibaba</a></li>
									<li><a href="https://jiji.co.ke/">Jiji</a></li>
									<li><a href="https://www.jumia.co.ke/">Jumia</a></li>
									
								</ul>
							</li>    ---->
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>