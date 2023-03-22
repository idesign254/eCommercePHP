<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'merushop');
//error_reporting('0');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
  
if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $code=$_POST['code'];
  $description=$_POST['description'];
  $pName=$_POST['pName'];
  $price=$_POST['price'];
  $shop=$_POST['shop'];
  $productAvailability=$_POST['productAvailability'];
  $productimage1=$_FILES["productimage1"]["name"];
  $productimage2=$_FILES["productimage2"]["name"];

  move_uploaded_file($_FILES["productimage1"]["tmp_name"],"images/".$_FILES["productimage1"]["name"]);
  move_uploaded_file($_FILES["productimage2"]["tmp_name"],"images/".$_FILES["productimage2"]["name"]);
$sql=mysqli_query($con,"insert into products(code,category,description,pName,productImage1,productImage2,price,shop,productAvailability) values('$code','$category','$description','$pName','$productimage1','$productimage2','$price','$shop','$productAvailability')");
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

  <div class="wrapper">
    <div class="container">
      <div class="row">
      <div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <a href="#">_</a>
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
<label class="control-label" for="basicinput">Code</label>
<div class="controls">
<input type="text"    name="code"  placeholder="ie:d2-d9,e1-e9" class="span8 tip" required>
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
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
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

          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->




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