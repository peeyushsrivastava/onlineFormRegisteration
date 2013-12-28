<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/browserCheck.js"> </script>


<title>APPLICATION SUBMITTED</title>


<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}
-->
</style>
</head>
<?php 
include('session.php');
include('conn.php');
?>

<body>
<center>
  <h1>Your Application No is <br /> <?php echo $row['app']; ?></h1><hr />

<h2><center><noscript class="notice">
      
      <br /><br /><br /><br /><br /> Please Enable JavaScript In your Browser And Continue <br /><br /><br /><br /><br /></noscript></center></h2>

<h2>Your Registration Id is<br /> <?php echo $regno; ?> </h2>

</center>

<h2><center><noscript class="notice"><br /><br /><br /><br /><br /> Please Enable JavaScript In your Browser And Continue <br /><br /><br /><br /><br /></noscript></center></h2>
<a href="logout_rrb.php"><h5>logout</h5></a>

</body>
</html>
