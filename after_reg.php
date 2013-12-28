<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style3 {font-size: 24px}
-->
</style>
</head>

<body>
<?php
include('conn.php');
include('session.php');
?>
<div align="center"><h3>You have successfully registered</h3> </div>
<fieldset>
<legend>Provisional Registration Details</legend>
<div align="center"> 
  <p><br>
    Your Application No. is <strong><span class="style3"><?php echo $row['app']; ?></span></strong>  </p>
  <p><br>
      Your Registration Id is <strong><span class="style3"><?php echo $row['regno']; ?></span></strong>  </p>
  
	<br>
    <span class="notice"> <h4>IMPORTANT - Please NOTE your Application No. and Registration Id before you proceed further, otherwise the data entered earlier will not be accessible.</h4></span>
    <?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


if ($row['fees'] =='N') {echo '<div style="border:double;width:80% ">
  Print your bank challan from the link below, submit your application fees and then login again to fill your application form.<br /><br />
  <a href="challan.php" >Click to Print Challan</a> <br> <p>
    Please use Application No. and your Date of Birth to <strong>login</strong></p>
  </div>
';}
?>

<input type="button" value="Click here to fill Application form" onclick="window.location='home.php'" />
</div>
</fieldset>
</body>

</html>
