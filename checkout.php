    <?php  require('includes/conn.php'); ?>
    <?php  if(strlen($_SESSION['login'])==0)
    {   
echo "<script> window.location.assign('checkoutlogin.php'); </script>";
}
?>

<?php include('includes/header.php');
?>

  
          <?php
      
        if(isset($_POST['submit'])){
             $consumer_key = "yr1XvuXAvBSIEDWaCmiXaLRoXQAx5br7";
            $consumer_secret = "RVnHw85BW1kxt5dt";
            $PhoneNumber = $_POST['tel'];
            //$Amount  = 200;
           $Account = 'Meru Shops';
           $TransDesc = 'Sales';
           
           $grand=0;
           foreach ($_SESSION["shopping_cart"] as $key => $product) {
               $grand = $grand + ($product["quantity"] * $product["price"]);

           } 
            
        /*generate token*/
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode($consumer_key.':'.$consumer_secret);
        //setting a custom header
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); 
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $curl_response = curl_exec($curl);

        $token = json_decode($curl_response)->access_token;
        
        /*generate pass and prompt for stk push*/
        
        $timestamp='20'.date("ymdhis");
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $password=base64_encode($BusinessShortCode.$LipaNaMpesaPasskey.$timestamp);
        $url1 = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token));


        $curl_post_data = array(
            'BusinessShortCode' => $BusinessShortCode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $grand,
            'PartyA' => $PhoneNumber,
            'PartyB' => $BusinessShortCode,
            'PhoneNumber' => $PhoneNumber,
            // CallBackURL can be set to any external link
            // We set it ot save.php to record the transactions
            'CallBackURL' => 'http://merushops.mmdtech.co.ke/save.php',
            'AccountReference' => $Account,
            'TransactionDesc' => $TransDesc
        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $curl_response=curl_exec($curl);
        //echo  $curl_response;
        unset($_SESSION['shopping_cart']);
        }
        
     ?>  


  <!-- New Arrivals -->
<div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill"><?php echo count($_SESSION["shopping_cart"]);  ?></span>
          </h4>
          <ul class="list-group mb-3">
           
          
                       <?php   foreach ($_SESSION["shopping_cart"] as $product){  ?>
                  <tr>
               <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <small class="text-muted"><?php echo $product["pName"]; ?></small>
                <small class="text-muted"><?php echo $product["quantity"]; ?></small>
              </div>
              <span class="text-muted"> <?php  echo number_format( $product["quantity"] * $product["price"], 2); ?></span>
            </li>                            
                </tr>
                <?php  $total = $total + ($product["quantity"] * $product["price"]); } ?>

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
$cash=$_POST['cash'];
$products = $product["pName"];
$query=mysqli_query($con,"INSERT INTO orders(username,tel,email,address,cash,products)
               VALUES('$username','$tel','$email','$address','$cash','$products')");
if($query)
{
         echo "<script>alert('Order placed successfully');</script>";
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
            
            <div class="mb-3">
              <label for="username">Total</label>
              <div class="input-group">
               
                <input type="text" class="form-control" id="cash" name="cash"   value="<?php echo $total;  ?>">
                
              </div>
            </div><br>

             <div class="mb-3">
            <input type="radio" name="paymethod" value="COD" checked="checked"> COD
       <input type="radio" name="paymethod" value="Internet Banking"> Internet Banking
       <input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card <br /><br />
        </div>

            <button class="btn btn-success btn-lg btn-block" name="submit" value="submit">Ksh <?php echo number_format($total , 2); ?> | Make A Pay</button>
          </form>
          <?php 
          echo $curl_response;
          ?>
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