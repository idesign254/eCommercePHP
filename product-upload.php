<?php
require('includes/conn.php');

if(strlen($_SESSION['login'])==0)
  { 
echo "<script> window.location.assign('index.php'); </script>";
}
else{
  
if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $description=$_POST['description'];
  $pName=$_POST['pName'];
  $price=$_POST['price'];
  $shop=$_POST['shop'];
  $productAvailability=$_POST['productAvailability'];
  $image=$_FILES["image"]["name"];
  $vimage2=$_FILES["vimage2"]["name"];

  move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
  move_uploaded_file($_FILES["vimage2"]["tmp_name"],"images/".$_FILES["vimage2"]["name"]);
$sql=mysqli_query($con,"insert into product(category,description,pName,image,vimage2,price,shop,productAvailability) values('$category','$description','$pName','$image','$vimage2','$price','$shop','$productAvailability')");
$_SESSION['msg']="Product Inserted Successfully !!";

}

?>

<html>
<head>
  <title>Shop Admin :<?php echo htmlentities($_SESSION['username']);?></title>
  <!---Favicon icon--->
      <link rel="icon" type="icon" href="images/logo.png">
      
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/tables.css">
<!---Favicon icon -->
      <link rel="icon" type="icon" href="images/mmd.png" alt="MMDTECH LOGO">
 

</head>
<body>


            <div class="module">
              <div class="module-head">
                <a href="post-item.php">_</a>
                <h3>Insert Product</h3>                
              </div>
              <div class="module-body">

                  <?php if(isset($_POST['submit']))
{?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                  </div>
<?php } ?>


                  <?php if(isset($_GET['del']))
{?>
                  <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Oh snap!</strong>   <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                  </div>
<?php } ?>

                  <br />

      <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Select Category</option> 
<option>1</option>
<option>2</option>
<option>3</option>
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
<input type="file" name="image" id="image" value="" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Image2</label>
<div class="controls">
<input type="file" name="vimage2"  class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">price</label>
<div class="controls">
<input type="text"    name="price"  placeholder="Enter price" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">shop</label>
<div class="controls">
<input type="text"    name="shop"  placeholder="Enter shop" class="span8 tip" required>
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
                        <button type="submit" name="submit" class="btn btn-success">Insert</button> <a  href="logout.php"><buton class="btn btn-danger">Logout</buton></a>
                      </div>
                    </div>
                  </form>

              </div>
            </div>

          

  <!-- Footer -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/admin.js"></script>


<?php } ?>