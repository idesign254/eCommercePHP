<?php
include('includes/conn.php');
if(strlen($_SESSION['login'])==0)
  { 
echo "<script> window.location.assign('profilelogin.php'); </script>";
}
else{

if(isset($_POST['submit']))
{
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $username=$_POST['username'];
  $contactno=$_POST['contactno'];
  $email=$_SESSION['login'];
  $address=$_POST['address'];
  

$sql = "UPDATE user SET firstname='$firstname',lastname='lastname',username='username',contactno='contactno',address='address' WHERE email='$email' ";

if (mysqli_query($con, $sql)) {
      echo "<script>alert('Profile updated successfully');</script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}

?>


<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "autofocus";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

        <?php   require('includes/header.php');  ?><br>

            <?php
              $email=$_SESSION['login'];             
              $query=$con->query("SELECT * FROM user WHERE email='$email' LIMIT 1");             
              $rowuser=mysqli_fetch_array($query);
            ?>

<div class="col-sm-6" style="padding-left:100px;">
    <!-- <h3><?php // echo htmlentities($_SESSION['username']);?></h3>    -->
      <div class="control-group">
         <div class="controls">
         <img src="<?php "<img src='$ProfileimagePath".$row['Profile']."' width='50%' >";?>"><br>
         <a href="changeProfilePic.php?id=<?php echo $rowuser['id'];?>">Change Image</a>
        </div>
    </div>
</div>

<div class="col-sm-6" >
  <form  role="form" method="post" name="register" onSubmit="return valid();" enctype="multipart/form-data" style="padding-bottom: 50px;padding-top: 50px;padding-right: 20px">    
<div class="form-group">
    <label class="info-title" for="fullname">FirstName <span>*</span></label>
    <input type="text" class="form-control unicase-form-control text-input" id="firstname" name="firstname" value="<?php echo $rowuser['firstname'];  ?>" >
      </div>

      <div class="form-group">
        <label class="info-title" for="fullname">LastName <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" id="lastname" name="lastname" value="<?php echo $rowuser['lastname'];  ?>" >
      </div>

  <div class="form-group">
     <label class="info-title" for="exampleInputEmail2">Username <span>*</span></label>
     <input type="text" class="form-control unicase-form-control text-input" id="username" value="<?php echo $rowuser['username'];  ?>" onBlur="userAvailability()" name="username"  >
      </div>

      <div class="form-group">
        <label class="info-title" for="contactno">Tel <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $rowuser['contactno'];  ?>" id="contactno" name="contactno"  maxlength="14"  >       
      </div>

    <div class="form-group">
        <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
        <input type="email" class="form-control unicase-form-control text-input" value="<?php echo $rowuser['email'];  ?>"  id="email" onBlur="userAvailability()" name="emailid" required >
               <span id="user-availability-status1" style="font-size:12px;"></span>
      </div>

      <div class="form-group">
        <label class="info-title" for="contactno">address <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $rowuser['address'];  ?>" id="address" name="address" maxlength="10" required >
      </div>

      <button type="submit" name="submit" class="btn-upper btn btn-success checkout-page-button" id="submit">Update</button>
      </form>

    </div>

      
<?php   require('includes/footer.php'); ?>


<?php } ?>