<?php
define('DB_SERVER','sql204.infinityfree.com');
define('DB_USER','if0_38907084');
define('DB_PASS' ,'19June2005');
define('DB_NAME','if0_38907084_onlinecorse');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
