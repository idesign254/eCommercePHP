    <?php  require('includes/conn.php'); ?>
    <?php  if(strlen($_SESSION['login'])==0)
    {   
echo "<script> window.location.assign('checkoutlogin.php'); </script>";
}
?>

<?php include('includes/header.php');
?>          

  <!-- New Arrivals -->
<div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">         
          <h4 class="d-flex justify-content-between align-items-center mb-3"><br>
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill"><?php echo count($_SESSION["shopping_cart"]);  ?></span>
          </h4>
          <ul class="list-group mb-3">
           
          
                       <?php   
foreach ($_SESSION["shopping_cart"] as $product){
?>
                  <tr>

               <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <small class="text-muted"><?php echo $product["pName"]; ?></small>
                <small class="text-muted"><?php echo $product["quantity"]; ?></small>
              </div>
              <span class="text-muted"> <?php  echo number_format( $product["quantity"] * $product["price"], 2); ?></span>
            </li>
                            
                </tr>
                <?php
                     $total = $total + ($product["quantity"] * $product["price"]);
                   }
                ?>

          </ul>
        </div>
        
        <div class="col-md-8 order-md-1" style="margin-bottom: 20px;">
          <br>
           <?php 
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$address=$_POST['address'];
$cash=$total;
$products = $product["pName"];
$paymentMethod = 'COD';
$orderStatus = "Processing";
$query=mysqli_query($con,"INSERT INTO orders(username,tel,email,address,cash,products,paymentMethod,orderStatus)
               VALUES('$username','$tel','$email','$address','$cash','$products','$paymentMethod','$orderStatus')");
if($query)
{
         echo "<script>alert('Order placed successfully');</script>";
          unset($_SESSION['shopping_cart']);
          echo "<script> window.location.assign('myorders.php'); </script>";
}
else{
        echo '<div class="alert alert-danger"> Opps!! An Error occured while processing the order</div><br>'.mysqli_error($con);
}
}
       ?>
          <form class="needs-validation" method="post">
            <div class="row">
                <?php
                $email=$_SESSION['login'];
             
                $query=$con->query("SELECT * FROM user WHERE email='$email' LIMIT 1");
             
                 $rowuser=mysqli_fetch_array($query);
                ?>
            </div>
             <h3  class="text-muted">Cash on Delivery</h3>
            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
               
                <input type="text" class="form-control" id="username"  name="username" value="<?php echo $rowuser['lastname'];  ?>">
                
              </div>
            </div>
            
             <div class="mb-3">
              <label for="username">Tel</label>
              <div class="input-group">
               
                <input type="text" class="form-control" id="phone" name="tel" placeholder="2547..."  value="<?php echo $rowuser['contactno'];  ?>">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email"  name="email" value="<?php echo $rowuser['email'];  ?>">
             
            </div>
            
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="address" class="form-control" id="address"  name="address" value="<?php echo $rowuser['address'];  ?>">
             
            </div>
            
            <br>
            
            <button class="btn btn-success btn-lg btn-block" name="submit" value="submit">Confirm Order</button>
          </form>          
        </div>


      </div>

    </div>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  

  <!-- Footer -->

<?php include('includes/footer.php');  ?>