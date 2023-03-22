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
if(isset($_POST['submit']))
{
$UserEmail=$_POST['UserEmail'];
$Testimonial=$_POST['Testimonial'];
$image=$_FILES["image"]["name"];

move_uploaded_file($_FILES["image"]["tmp_name"],"images/testimonial/".$_FILES["image"]["name"]);
$query=mysqli_query($con,"INSERT INTO testimonial(UserEmail,Testimonial,images)
               VALUES('$UserEmail','$Testimonial','$image')");
if($query)
{
         echo '<div class="alert alert-success"> Thanks for your time</div>';
}
else{
        echo '<div class="alert alert-danger"> Opps!! An Error occured while processing the request</div><br>'.mysqli_error($con);
}
}
       ?>
          

					<form method="POST" action="" enctype="multipart/form-data">				
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" name="UserEmail" class="form-control" placeholder="Email">
							</div>
						</div>

						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="Testimonial" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
							</div>
						</div>

						<div class="control-group">
						<div class="controls">
						<input type="file" name="image" id="image" value="" class="span8 tip" required>
						</div>
						</div><br>
						<div class="form-group">
							<input type="submit" name="submit" value="submit" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<?php   require('includes/footer.php'); ?>