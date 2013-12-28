<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
<?php 
$cname = $fname = $mname = $comm = $minority = $minoritycomm = $gender = $bdd = $bmm = $byy = $reli = $gtexsm = $ph = $ph_yes = $id_mark = $a1 = $a2 = $a3 = $a4 = $a5 = $b1 = $b2 = $b3 = $b4 = $b5 = $c1 = $c2 = $c3 = $c4 = $c5 = $d1 = $d2 = $d3 = $d4 = $d5 = $e1 = $e2 = $e3 = $e4 = $e5 = $padd = $pcity = $ppin = $pdist = $pstate = $nrly = $sameadd = $cadd = $ccity = $cpin = $cdist = $married = $medium = $fees = $feeReason = $ageRelx = $ageReason = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$cname = $_POST['cname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	if(isset($_POST['comm'])){$comm = $_POST['comm'];}
	if(isset($_POST['minority'])){$minority = $_POST['minority'];}
	$minoritycomm = $_POST['minoritycomm'];
	if(isset($_POST['gender'])){$gender = $_POST['gender'];}
	$bdd = $_POST['bdd'];
	$bmm = $_POST['bmm'];
	$byy = $_POST['byy'];
	if(isset($_POST['reli'])){$reli = $_POST['reli'];}
	if(isset($_POST['gtexsm'])){$gtexsm = $_POST['gtexsm'];}
	if(isset($_POST['ph'])){$ph = $_POST['ph'];}
	$ph_yes = $_POST['ph_yes'];
	$id_mark = $_POST['id_mark'];
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a4 = $_POST['a4'];
	$a5 = $_POST['a5'];
	$b1 = $_POST['b1'];
	$b2 = $_POST['b2'];
	$b3 = $_POST['b3'];
	$b4 = $_POST['b4'];
	$b5 = $_POST['b5'];
	$c1 = $_POST['c1'];
	$c2 = $_POST['c2'];
	$c3 = $_POST['c3'];
	$c4 = $_POST['c4'];
	$c5 = $_POST['c5'];
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	$d3 = $_POST['d3'];
	$d4 = $_POST['d4'];
	$d5 = $_POST['d5'];
	$e1 = $_POST['e1'];
	$e2 = $_POST['e2'];
	$e3 = $_POST['e3'];
	$e4 = $_POST['e4'];
	$e5 = $_POST['e5'];
	$padd = $_POST['padd'];
	$pcity = $_POST['pcity'];
	$ppin = $_POST['ppin'];
	$pdist = $_POST['pdist'];
	$pstate = $_POST['pstate'];
	$nrly = $_POST['nrly'];
	if(isset($_POST['sameadd'])){$sameadd = $_POST['sameadd'];}
	$cadd = $_POST['cadd'];
	$ccity = $_POST['ccity'];
	$cpin = $_POST['cpin'];
	$cdist = $_POST['cdist'];
	if(isset($_POST['married'])){$married = $_POST['married'];};
	$medium = $_POST['medium'];
	if(isset($_POST['fees'])){$fees = $_POST['fees'];}
	$feeReason = $_POST['feeReason'];
	if(isset($_POST['ageRelx'])){$ageRelx = $_POST['ageRelx'];}
	$ageReason = $_POST['ageReason'];
	}
?>
<?php
$con=mysqli_connect("127.0.0.1","root","","rrb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO new(cname, fname, mname, comm, minority, minoritycomm, gender, bdd, bmm, byy, reli, gtexsm, ph, ph_yes, id_mark, a1, a2, a3, a4, a5, b1, b2, b3, b4, b5, c1, c2, c3, c4, c5, d1, d2, d3, d4, d5, e1, e2, e3, e4, e5, padd, pcity, ppin, pdist, pstate, nrly, sameadd, cadd, ccity, cpin, cdist, married, medium, fees, feeReason, ageRelx, ageReason)
VALUES
('$cname','$fname','$mname','$comm','$minority','$minoritycomm','$gender','$bdd','$bmm','$byy','$reli','$gtexsm','$ph','$ph_yes','$id_mark','$a1','$a2','$a3','$a4','$a5','$b1','$b2','$b3','$b4','$b5','$c1','$c2','$c3','$c4','$c5','$d1','$d2','$d3','$d4','$d5','$e1','$e2','$e3','$e4','$e5','$padd','$pcity','$ppin','$pdist','$pstate','$nrly','$sameadd','$cadd','$ccity','$cpin','$cdist','$married','$medium','$fees','$feeReason','$ageRelx','$ageReason')";



if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

$result = mysqli_query($con,"SELECT * from new order by app desc limit 1;");

while($row = mysqli_fetch_array($result))
  {
  echo "your Application id is :" . $row['app'];
  echo "<br>";
  echo "Name :" . $row['cname'];
  echo "<br>";
  echo "Father's Name :" . $row['fname'];
  }

mysqli_close($con);
?>

<p><br>

</body>
</html>
