        <?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'merushop');

error_reporting('0');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

?>