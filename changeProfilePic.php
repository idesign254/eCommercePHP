<?php
	include('includes/conn.php');
	if(strlen($_SESSION['login'])==0) { 
		echo "<script> window.location.assign('profilelogin.php'); </script>";
} else{
	$pid=intval($_GET['id']);// product id
	if(isset($_POST['submit'])) {
		$productname=$_POST['productName'];
		$profile=$_FILES["profile"]["name"];

move_uploaded_file($_FILES["profile"]["tmp_name"],"images/".$_FILES["profile"]["name"]);

		$sql=mysqli_query($con,"update  user set Profile='$profile' where id='$pid' ");
		$_SESSION['msg']="Profile Image Updated Successfully !!";
	}
?>



<script>
 function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


<?php include('includes/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>



									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
							<?php
                $email=$_SESSION['login'];             
                $query=$con->query("SELECT user.email,user.Profile FROM user WHERE email='$email' LIMIT 1");           
                $rowuser=mysqli_fetch_array($query);
              ?>

<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<input type="text"    name="email"  readonly value="<?php echo htmlentities($rowuser['email']);?>">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Current</label>
<div class="controls">
<img src="images/<?php echo htmlentities($rowuser['Profile']);?>" width="200" height="100"> 
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">New</label>
<div class="controls">
<input type="file" name="profile" class="span8 tip" required>
</div>
</div><br>


	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn btn-success">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('includes/footer.php');?>

<?php } ?>