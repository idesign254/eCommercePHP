<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['admnlogin'])==0)
  { 
echo "<script> window.location.assign('index.php'); </script>";
}
else{
  
?>
<!DOCTYPE>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin| <?php echo htmlentities($_SESSION['username']);?></title>
  <!---Favicon icon -->
      <link rel="icon" type="icon" href="images/mmd.png" alt="MMDTECH LOGO">
    <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/tables.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!---Favicon icon -->
      <link rel="icon" type="icon" href="images/mmd.png" alt="MMDTECH LOGO">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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

</head>
<body style="    background-color: #FF9800;">

      <nav class="navbar navbar-expand navbar-dark  static-top">

    <a class="navbar-brand mr-1" href="dashboard.php">Meru Shops  | <?php echo htmlentities($_SESSION['username']);?>  </a>

    <!-- Navbar Search -->
   <!--  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form> -->

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     <!--  <li class="nav-item dropdown no-arrow mx-1">
        <a  class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                     

<?php
// $result = mysqli_query($con,"SELECT * FROM contact");
     //       $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                <span class="badge badge-success"><?php // echo htmlentities($num_rows1);?></span>
 <?php } ?>
        </a>
      
      </li> -->
      <!-- <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
        </a>        
      </li> -->
      <li class="nav-item dropdown no-arrow">
        <a href="logout.php"style="color: #ffffff" > Logout  </a>       
      </li>
    </ul>

  </nav>

  <div id="wrapper">

   <div id="content-wrapper">

      <div class="container-fluid"> <br>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">  Messages!</div>
<?php
$result = mysqli_query($con,"SELECT * FROM contact");
            $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($num_rows1);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="messages.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Orders!</div>
        <?php
$result = mysqli_query($con,"SELECT * FROM orders");
            $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($num_rows1);?></div>
                      <?php } ?>


              </div>
              <a class="card-footer text-white clearfix small z-1" href="orders.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Products!</div>
 <?php
$result = mysqli_query($con,"SELECT * FROM products");
            $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($num_rows1);?></div>
                      <?php } ?>


              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage-products.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Users!</div>

 <?php
$result = mysqli_query($con,"SELECT * FROM user");
            $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($num_rows1);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage-users.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color: #736263 ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Testimonials!</div>

 <?php
$result = mysqli_query($con,"SELECT * FROM testimonial");
            $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($num_rows1);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="testimonials.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color: #17a2b8 ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Subscribers!</div>

 <?php
$result = mysqli_query($con,"SELECT * FROM subscribers");
            $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($num_rows1);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="subscribers.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color: #a638ca ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Posted Items!</div>

 <?php
$result = mysqli_query($con,"SELECT * FROM products");
            $num_rows1 = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($num_rows1);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage-products.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color: #495057 ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Todays orders!</div>

 <?php
 $f1="00:00:00";
            $from=date('Y-m-d')." ".$f1;
            $t1="23:59:59";
            $to=date('Y-m-d')." ".$t1;
             $result = mysqli_query($con,"SELECT * FROM orders where DatePosted Between '$from' and '$to'");
            $today = mysqli_num_rows($result);
            {
            ?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($today);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="todays-orders.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color: #ee1026cf ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Pending orders!</div>

 <?php
$status='Pending';                   
        $ret = mysqli_query($con,"SELECT * FROM orders where orderStatus='$status' || orderStatus is null ");
        $Pending = mysqli_num_rows($ret);
        {?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($Pending);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="pending-orders.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color: #1d375e ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Delivered orders!</div>

  <?php 
          $status='Delivered';                   
        $rt = mysqli_query($con,"SELECT * FROM orders where orderStatus='$status'");
        $Delivered = mysqli_num_rows($rt);
        {?>
                        <div class="stat-panel-number h1 "><?php echo htmlentities($Delivered);?></div>
                      <?php } ?>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="delivered-orders.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

              </div>
          </div>
        </div>
</div>
</div>
</div>
</div>
<?php include('include/footer.php');?>


<?php } ?>