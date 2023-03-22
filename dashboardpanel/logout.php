<?php
session_start();
include('include/config.php');
$_SESSION['admnlogin']=="";
date_default_timezone_set('Africa/Nairobi');
$ldate=date( 'd-m-Y h:i:s A', time() );
mysqli_query($con,"UPDATE adminlog  SET logout = '$ldate' 
					WHERE userEmail = '".$_SESSION['admnlogin']."' ORDER BY id DESC LIMIT 1");
session_unset();
session_destroy();
?>

<script language="javascript">
document.location="index.php";
</script>
