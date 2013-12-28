<?php
include('conn.php');
session_start();
if (!isset($_SESSION['regno'])){
header('location:welcome_rrb.php');
}
?>
<?php
$regno=$_SESSION['regno'];

$result=mysql_query("select * from new where regno='$regno'")or die(mysql_error);
$row=mysql_fetch_array($result);

$cname=$row['cname'];
$fname=$row['fname'];
?>
