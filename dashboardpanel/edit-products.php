<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['admnlogin'])==0)
	{	
echo "<script> window.location.assign('index.php'); </script>";
}
else{
	$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$code=$_POST['code'];
	$category=$_POST['category'];
	$description=$_POST['description'];
	$pName=$_POST['pName'];
	$price=$_POST['price'];
	$shop=$_POST['shop'];
	$productAvailability=$_POST['productAvailability'];
	
$sql=mysqli_query($con,"update  products set code='$code',category='$category',description='$description',pName='$pName',price='$price',shop='$shop',productAvailability='$productAvailability' where id='$pid' ");
$_SESSION['msg']="Product Updated Successfully !!";

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

<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Edit Product</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
<?php
 $query=mysqli_query($con,"select * from products where id='$pid'");
while($result=mysqli_fetch_array($query))
{?>
<div class="control-group">
<label class="control-label" for="basicinput">Code</label>
<div class="controls">
<input type="text"    name="code"  value="<?php echo $result['code'];?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Select Category</option> 
<?php $query=mysqli_query($con,"select * from category");
while($row=mysqli_fetch_array($query))
{?>
<option value="<?php echo $row['categoryName'];?>"> <?php echo $row['categoryName'];?> </option>
<?php } ?>
</select>
</div>
</div>
                
<div class="control-group">
<label class="control-label" for="basicinput">description</label>
<div class="controls">
<input type="text"    name="description"  value="<?php echo $result['description'];?>" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<input type="text"    name="pName"  value="<?php echo $result['pName'];?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls">
<img src="images/sales/<?php echo htmlentities($result['productImage1']);?>" width="200" height="100"> <a href="update-image1.php?id=<?php echo $result['id'];?>">Change Image</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Image2</label>
<div class="controls">
<img src="images/sales/<?php echo htmlentities($result['productImage2']);?>" width="200" height="100"> <a href="update-image2.php?id=<?php echo $result['id'];?>">Change Image</a></div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">price</label>
<div class="controls">
<input type="text"    name="price"  value="<?php echo $result['price'];?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Shop</label>
<div class="controls">
<select name="shop" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Select Shop</option> 
<?php $query=mysqli_query($con,"select * from shops");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['shopName'];?>"><?php echo $row['shopName'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Availability</label>
<div class="controls">
<select   name="productAvailability"  id="productAvailability" class="span8 tip" required>
<option value="">Select</option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>
<br>

  <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="submit" class="btn btn-success">Update</button>
                      </div>
                    </div>
                <?php  } ?>
                  </form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>