
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['admnlogin'])==0)
	{	
echo "<script> window.location.assign('index.php'); </script>";
}
else{
	
if(isset($_POST['submit']))
{
	$code=$_POST['code'];
  $category=$_POST['category'];
  $description=$_POST['description'];
  $pName=$_POST['pName'];
  $price=$_POST['price'];
  $shop=$_POST['shop'];
  $productAvailability=$_POST['productAvailability'];
  $productimage1=$_FILES["productimage1"]["name"];
  $productimage2=$_FILES["productimage2"]["name"];

  move_uploaded_file($_FILES["productimage1"]["tmp_name"],"images/sales/".$_FILES["productimage1"]["name"]);
  move_uploaded_file($_FILES["productimage2"]["tmp_name"],"images/sales/".$_FILES["productimage2"]["name"]);

$sql=mysqli_query($con,"INSERT INTO products(code,category,description,pName,productImage1,productImage2,price,shop,productAvailability) 
	VALUES('$code','$category','$description','$pName','$productimage1','$productimage2','$price','$shop','$productAvailability')");
$_SESSION['msg']="Product Inserted Successfully !!";
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
								<h3>Insert Product</h3>
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

<div class="control-group">
<label class="control-label" for="basicinput">Code</label>
<div class="controls">
<input type="text"    name="code"  placeholder="code" class="span8 tip" required>
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

<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
</select>
</div>
</div>
                
<div class="control-group">
<label class="control-label" for="basicinput">description</label>
<div class="controls">
<input type="text"    name="description"  placeholder="description" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<input type="text"    name="pName"  placeholder="Enter Product Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls">
<input type="file" name="productimage1" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Image2</label>
<div class="controls">
<input type="file" name="productimage2"  class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">price</label>
<div class="controls">
<input type="text"    name="price"  placeholder="Enter price" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Shop</label>
<div class="controls">
<select name="shop" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Select Shop</option> 
<?php 
	$query=mysqli_query($con,"select * from shops");
	while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"> <?php echo $row['shopName'];?> </option>
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
                        <button type="submit" name="submit" class="btn btn-success">Insert</button>
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

<?php include('include/footer.php');?>

<?php } ?>