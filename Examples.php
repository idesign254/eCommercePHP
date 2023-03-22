<?php

// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM user WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num > 0)
{
	 //$_SESSION['login']   ==== sets to the email posted on login
    $_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
    //the login session (  $_SESSION['login'] ) above is used here to insert the posted to the database for log management   
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

echo "<script> window.location.assign('profile.php'); </script>";

}

else
{
echo "<script>alert('Invalid email id or Password');</script>";
		}
	}

?>






//Code for profile image

            <?php
            //session login is set on login ,so it fetches the email assigned to it
                $email=$_SESSION['login'];
             // the query below fetches data from the database matching the email
                $query=$con->query("SELECT * FROM user WHERE email='$email' LIMIT 1");
             //$variable rowuser is an  array that holds the results queried
                 $rowuser=mysqli_fetch_array($query);
                ?>


                <div class="controls">
                	<!---
        //Image Dir comes before the php
       //Profile is the name i Had given to my table
      //The code below fetches the image name which displays it equal to session variable asssigned to a specific email account
      --->
  <img src="images/<?php echo $rowuser['Profile'];?>" width="100%" >

