<?php  require('includes/conn.php'); ?>

  <?php  if(strlen($_SESSION['login'])==0) {   
    echo "<script> window.location.assign('payment-methodlogin.php'); </script>";
        }

if (isset($_POST['submit'])) {
    $method="";
    $method=$_POST['paymethod'];
    if ($method == 'paybill') {
      # code...
      echo "<script> window.location.assign('paybill.php'); </script>";
    }else{
      echo "<script> window.location.assign('COD.php'); </script>";
    }
  }
?>

<?php include('includes/header.php');
?>

  <!-- New Arrivals -->
      <div class="container">
      <div class="row">       
        
        <div class="col-md-12 order-md-1" style="margin-bottom: 20px;"><br>
          <form class="needs-validation" method="post">           
             <div class="mb-3">
       <input type="radio" name="paymethod" value="COD" checked="checked"> COD <br />
       <input type="radio" name="paymethod" value="paybill"> Mpesa <br />
        </div>
            <button class="btn btn-success" name="submit" value="submit">Proceed</button>
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