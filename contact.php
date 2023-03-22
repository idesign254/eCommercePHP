<?php require('includes/conn.php'); ?>

<?php require('includes/header.php'); ?>


		<!-- END map -->
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<ul>
							<li class="address">07 19 577 260, <br> Meru</li>
							<li class="phone"><a href="tel://07 19 577 260">07 19 577 260</a></li>
							<li class="email"><a href="mailto:info@mmdtech.co.ke">info@mmdtech.co.ke</a></li>
							<li class="url"><a href="http://mmdtech.co.ke">mmdtech.co.ke</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
										<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }


}
?>

 <?php 
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$message=$_POST['message'];
$query=mysqli_query($con,"INSERT INTO contact(name,email,tel,message)
               VALUES('$name','$email','$tel','$message')");
if($query)
{
         echo '<div class="alert alert-success"> Thanks for contacting us. We will get back to you</div>';
}
else{
        echo '<div class="alert alert-danger"> Opps!! An Error occured while processing the request</div><br>'.mysqli_error($con);
}
}
       ?>
          

					<form method="POST" action="">
				
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" name="name"   class="form-control" placeholder="Full Names">
								<?php  echo $nameErr; ?>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" name="email" class="form-control" placeholder="Email">
								<?php  echo $emailErr; ?>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" name="tel" class="form-control" placeholder="Tel">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="submit" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<?php   require('includes/footer.php'); ?>