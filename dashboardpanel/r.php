
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['admnlogin'])==0)
	{	
echo "<script> window.location.assign('index.php'); </script>";
}
else{
date_default_timezone_set('Africa/Nairobi');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from contact where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
		  }

?>


<?php // include('include/header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| <?php echo htmlentities($_SESSION['username']);?></title>
	<!---Favicon icon--->
      <link rel="icon" type="icon" href="images/mmd.png" alt="MMDTECH LOGO">
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/maintheme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

		<script src="scripts/jquery.min.js" type="text/javascript"></script>

</head>
<body>
<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Merushops |<?php echo htmlentities($_SESSION['username']);?>
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li><a href="#">
							Admin
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/mmd.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="change-password.php">Change Password</a></li>
								<li class="divider"></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->


<!--  <script>
  $(document).ready(function() {
        $("#newresponsecontainer").load("include/r.php");
       var newrefreshId = setInterval(function() {
      $("#newresponsecontainer").load('include/sidebar.php?randval='+ Math.random());
   }, 5000);
   $.ajaxSetup({ cache: false });
});
 </script> -->

<!--  <script type="text/javascript">
			var auto_refresh = setInterval(
			function () {
				$('#newresponsecontainer')
					.load('r.php')
					.fadeIn("slow");
			}, 5000); // refreshing every 15000 milliseconds/15 seconds
		</script> -->

<!--   <script type="text/javascript">
        var auto_refresh = setInterval(
            function() {
                $('#newresponsecontainer').load('include/r.php').fadeIn("slow");
            }, 5000); // refreshing after every 15000 milliseconds
    </script> -->


	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php // include('include/sidebar.php');?>

<div class="span3" id="newresponsecontainer">
					<div class="sidebar">

						
					<ul class="widget widget-menu unstyled">
                                <li><a href="dashboard.php"><i class="menu-icon icon-tasks"></i> Dashboard</a></li>
                            </ul>

						<ul class="widget widget-menu unstyled">

                          <li><a href="todays-orders.php"><i class="menu-icon icon-cog"></i> Today's Orders
                          	<?php
 						 $f1="00:00:00";
						$from=date('Y-m-d')." ".$f1;
						$t1="23:59:59";
						$to=date('Y-m-d')." ".$t1;
						 $result = mysqli_query($con,"SELECT * FROM orders where DatePosted Between '$from' and '$to'");
						$orderstoday = mysqli_num_rows($result);
						{
						?>
											<b class="label orange pull-right"><?php echo htmlentities($orderstoday); ?></b>
											<?php } ?>
                           </a>
                       </li>

                          <li><a href="pending-orders.php"><i class="menu-icon icon-tasks"></i> Pending Orders
                          	<?php	
					$status='Pending';									 
				$ret = mysqli_query($con,"SELECT * FROM orders where orderStatus='$status' || orderStatus is null ");
				$pending = mysqli_num_rows($ret);
				{?>
					<b class="label orange pull-right"><?php echo htmlentities($pending); ?></b>
				<?php } ?>
                           </a>
                       </li>
                          <li><a href="delivered-orders.php"><i class="icon-inbox"></i>Delivered Orders 
                          	<?php	
					$status='Delivered';									 
				$rt = mysqli_query($con,"SELECT * FROM orders where orderStatus='$status'");
				$delivered = mysqli_num_rows($rt);
				{?><b class="label green pull-right"><?php echo htmlentities($delivered); ?></b>
				<?php } ?>
                          </a>
                      </li>

                          <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Create Category 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM category");
				$createcategory = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($createcategory); ?></b>
				<?php } ?>
			</a>
		</li>

					  <li><a href="createshop.php"><i class="menu-icon icon-tasks"></i> Add Shop 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM shops");
				$addshops = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($addshops); ?></b>
				<?php } ?>
			</a>
		</li>

                          <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insert Product </a></li>

                          <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Manage Products 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM products");
				$products = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($products); ?></b>
				<?php } ?>
			</a>
		</li>

                          <li><a href="manage-users.php"><i class="menu-icon icon-table"></i>Manage users 
                          	<?php														 
				$rt = mysqli_query($con,"SELECT * FROM user");
				$allusers = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($allusers); ?></b>
				<?php } ?>
                          </a>
                      </li>

                          <li><a href="messages.php"><i class="menu-icon icon-paste"></i>Messages
                          	<?php														 
				$rt = mysqli_query($con,"SELECT * FROM contact");
				$messages = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($messages); ?></b>
				<?php } ?>
                           </a>
                       </li>

                          <li><a href="orders.php"><i class="menu-icon icon-paste"></i>Orders 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM orders");
				$allorders = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($allorders); ?></b>
				<?php } ?>
			</a>
		</li>

                          <li><a href="subscribers.php"><i class="menu-icon icon-table"></i>subcribers 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM subscribers");
				$subscribers = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($subscribers); ?></b>
				<?php } ?>
			</a>
		</li>
                          <li><a href="testimonials.php"><i class="menu-icon icon-table"></i>testimonials 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM testimonial");
				$testimonial = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($testimonial); ?></b>
				<?php } ?>
			</a>
		</li>
                          <li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log</a></li>
                          <li><a href="admin-logs.php"><i class="menu-icon icon-tasks"></i>Admin Login Log</a></li>
                        
                            </ul>


						<!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->



			<div class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Manage Messages</h3>
							</div>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
                      						<th>Email</th>
                      						<th>Tel</th>
                      						<th>Message</th>
                      						<th>DatePosted</th>
                      						<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from contact order by id DESC");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>											
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($row['name']);?></td>
							<td><?php echo htmlentities($row['email']);?></td>
							<td><?php echo htmlentities($row['tel']);?></td>
							<td><?php echo htmlentities($row['message']);?></td>
							<td><?php echo htmlentities($row['DatePosted']);?></td>						
							<td>
							<a href="messages.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">delete <i class="icon-remove-sign"></i></a>
						</td>
										</tr>
										<?php $cnt=$cnt+1; } ?>										
								</table>
							</div>
						</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

<?php } ?>