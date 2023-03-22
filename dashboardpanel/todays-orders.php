
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
		          mysqli_query($con,"delete from orders where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Order deleted !!";
		  }

?>



<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div  class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Todays Orders</h3>
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

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" >
									<thead>
										<tr>
											<th>#</th>
											<th>Username</th>
                     						 <th>Tel</th>
                      						<th>Email</th>
                      						<th>Address</th>
                      						<th>Cash</th>
                      						<th>Items</th>
                      						<th>DatePosted</th>
                      						<th>Action</th>
											
										
										</tr>
									</thead>
								
<tbody>
<?php 
 $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
$query=mysqli_query($con,"SELECT * FROM orders where orders.DatePosted Between '$from' and '$to' order by id DESC");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($row['username']);?></td>
							<td><?php echo htmlentities($row['tel']);?></td>
							<td><?php echo htmlentities($row['email']);?></td>
							<td><?php echo htmlentities($row['address']);?></td>
							<td><?php echo htmlentities($row['cash']);?></td>
							<td><?php echo htmlentities($row['products']);?></td>
							<td><?php echo htmlentities($row['DatePosted']);?></td>	
											<td><a href="updateorder.php?oid=<?php echo htmlentities($row['id']);?>" title="Update order" target="_blank"><i class="icon-edit"></i></a>
												<a href="todays-orders.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a>
											</td>
											</tr>

										<?php $cnt=$cnt+1; } ?>
										</tbody>
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