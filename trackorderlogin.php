    <?php 
     require('includes/conn.php'); 

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
echo "<script> window.location.assign('trackorder.php'); </script>";

}

else
{
//$_SESSION['errmsg']="Invalid email id or Password";
echo "<script>alert('Invalid email id or Password');</script>";
//exit();
		}
	}

?>

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

	<?php   require('includes/footer.php'); ?>