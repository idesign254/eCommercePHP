    <?php 
     require('includes/conn.php'); 

// Code user Registration
if(isset($_POST['submit']))
		{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$contactno=$_POST['contactno'];
$email=$_POST['emailid'];
$address=$_POST['address'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into user(firstname,lastname,username,contactno,email,address,password) 
	values('$firstname','$lastname','$username','$contactno','$email','$address','$password')");
if($query)
	{
	echo "<script>alert('successfully registered');</script>";
	}
else{
echo "<script>alert('Not registered something went wrong');</script>";
	}
		}
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM user WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num > 0)
{
    $_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//	echo "<script>alert('Logged in');</script>";
//	header("location:index.php");
echo "<script> window.location.assign('payment-method.php'); </script>";

}

else
{
//$_SESSION['errmsg']="Invalid email id or Password";
echo "<script>alert('Invalid email id or Password');</script>";
//exit();
		}
	}

?>

<?php  /*
session_start();

$con = mysqli_connect("localhost","mmdtechc_shops","36960722[]","mmdtechc_merushop");

*/
?>


<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<?php require('includes/header.php'); ?>  

   		 <div class="col-sm-6" >
 	<form  method="post" style="padding-bottom: 50px;padding-top: 50px;padding-left: 20px">
				<span style="color:red;" >
			<?php
			echo htmlentities($_SESSION['errmsg']);
			?>
			<?php
			echo htmlentities($_SESSION['errmsg']="");
			?>
			</span>
		
		<div class="row form-group">
							<div class="col-md-12">
								<label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
								<input type="email" name="email" class="form-control">
							</div>
						</div>
		<div class="row form-group">
							<div class="col-md-12">
								<label class="info-title" for="exampleInputEmail1"> Password<span>*</span></label>
								<input type="password" name="password" class="form-control">
							</div>
						</div>

		<div >
			  	<a href="forgot-password.php" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
		  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="login">Login</button>
					</form>	
    </div>


   			 <div class="col-sm-6" >
	<form  role="form" method="post" name="register" onSubmit="return valid();" style="padding-bottom: 50px;padding-top: 50px;padding-right: 20px">


<div class="form-group">
	  <label class="info-title" for="fullname">FirstName <span>*</span></label>
	  <input type="text" class="form-control unicase-form-control text-input" id="firstname" name="firstname" required="required">
	  	</div>

	  	<div class="form-group">
	    	<label class="info-title" for="fullname">LastName <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="lastname" name="lastname" required="required">
	  	</div>

	<div class="form-group">
	   <label class="info-title" for="exampleInputEmail2">Username <span>*</span></label>
	   <input type="text" class="form-control unicase-form-control text-input" id="username" onBlur="userAvailability()" name="username" required >
	  	</div>

	  	<div class="form-group">
	    	<label class="info-title" for="contactno">Tel <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" placeholder="ie.254712345678" maxlength="14" required >	    	
	  	</div>

		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" id="email" onBlur="userAvailability()" name="emailid" required >
	    	       <span id="user-availability-status1" style="font-size:12px;"></span>
	  	</div>

	  	<div class="form-group">
	    	<label class="info-title" for="contactno">address <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="address" name="address" maxlength="10" required >
	  	</div>


		<div class="form-group">
	    	<label class="info-title" for="password">Password. <span>*</span></label>
	    	<input type="password" class="form-control unicase-form-control text-input" id="password" name="password"  required >
	  	</div>

		<div class="form-group">
	    	<label class="info-title" for="confirmpassword">Confirm Password. <span>*</span></label>
	    	<input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required >
	  	</div>


	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button" id="submit">Sign Up</button>
			</form>

    </div>
  

	<?php   require('includes/footer.php'); ?>