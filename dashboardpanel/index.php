<?php
if(session_start() == true){
  session_destroy();
}
?>

<?php
session_start();

$con = mysqli_connect("localhost","root","","merushop");

if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['admnlogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into adminlog(userEmail,userip,status) values('".$_SESSION['admnlogin']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script> window.location.assign('dashboard.php'); </script>";
      }
else
{
$username=$_POST['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into adminlog(userEmail,userip,status) values('$username','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>alert('Not Logged in,Invalid Username or Password');</script>";
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Meru Shops</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<!---Favicon icon--->
      <link rel="icon" type="icon" href="images/mmd.png" alt="MMDTECH LOGO">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
  font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#ffffff;
}
h2{
  font-size:1.0em;
  color:#ffffff;
}
.form-box{
padding-top: 15%;}

.box{
  background:#ffffff26;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #ffffff61 4px solid; 
}

.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
  background:#2980b9;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}

#btn2{
  float:left;
  background:#3498db;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:10px;
  font-weight:800;
  font-size:0.8em;
}

#btn2:hover{ 
background:#3594D2; 
}
</style>
</head>


<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<div class="form-box"></div>

        <form method="post" action="" >
    <div class="box">
          <h1>Admin Dashboard</h1>
          <h1 id="demo"></h1>
          <script>
        var myVar = setInterval(myTimer, 1000);

        function myTimer() {
          var d = new Date();
          document.getElementById("demo").innerHTML = d.toLocaleTimeString();
        }
        </script>
        <input type="text" name="username" placeholder="username" id="username" class="email" />
        <input type="password" name="password" placeholder="password" id="password" class="email" />
  
        <button type="submit" name="submit" class="btn">Log In</button>  <!-- End Btn -->
      </div> 
        </form>
        <a href="https://merushops.mmdtech.co.ke/"><h2>Merushops</h2></a>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
