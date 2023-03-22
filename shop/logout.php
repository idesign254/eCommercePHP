        <?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'merushop');
//error_reporting('0');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

?>

<?php
$_SESSION['login']=="";
date_default_timezone_set('Africa/Nairobi');
$ldate=date( 'd-m-Y h:i:s A', time() );
mysqli_query($con,"UPDATE shopadminlog  SET logout = '$ldate' WHERE userEmail = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
session_unset();
session_destroy();
?>

<script language="javascript">
document.location="index.php";
</script>
