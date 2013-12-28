<?php 
include('conn.php');
include('session.php');
?>


<?php 
$cname = $fname = $mname = $comm = $minority = $minoritycomm = $gender = $bdd = $bmm = $byy = $reli = $gtexsm = $ph = $ph_yes = $id_mark = $a1 = $a2 = $a3 = $a4 = $a5 = $b1 = $b2 = $b3 = $b4 = $b5 = $c1 = $c2 = $c3 = $c4 = $c5 = $d1 = $d2 = $d3 = $d4 = $d5 = $e1 = $e2 = $e3 = $e4 = $e5 = $padd = $pcity = $ppin = $pdist = $pstate = $nrly = $sameadd = $cadd = $ccity = $cpin = $cdist = $married = $medium = $fees = $feeReason = $ageRelx = $ageReason = $gtemp1 = $gtemp2 = $gtemp3 = $gtemp4 = $exsm1 = $exsm2 = $exsm3 = $exsm4 = $fnp = $fns = $br_name = $br_code = $br_city = $dep_date = $jr_no = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
//	$cname = $_POST['cname'];
//	$fname = $_POST['fname'];
//	$mname = $_POST['mname'];
	if(isset($_POST['comm'])){$comm = $_POST['comm'];}
	if(isset($_POST['minority'])){$minority = $_POST['minority'];}
	$minoritycomm = $_POST['minoritycomm'];
	if(isset($_POST['gender'])){$gender = $_POST['gender'];}
//	$bdd = $_POST['bdd'];
//	$bmm = $_POST['bmm'];
//	$byy = $_POST['byy'];
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
//	if(isset($_POST['fees'])){$fees = $_POST['fees'];}
//	$feeReason = $_POST['feeReason'];
	if(isset($_POST['ageRelx'])){$ageRelx = $_POST['ageRelx'];}
	$ageReason = $_POST['ageReason'];
	$gtemp1 = $_POST['gtemp1'];
	$gtemp2 = $_POST['gtemp2'];
	$gtemp3 = $_POST['gtemp3'];
	$gtemp4 = $_POST['gtemp4'];
	$exsm1 = $_POST['exsm1'];
	$exsm2 = $_POST['exsm2'];
	$exsm3 = $_POST['exsm3'];
	$exsm4 = $_POST['exsm4'];
	$br_name = $_POST['br_name'];
	$br_code = $_POST['br_code'];
	$br_city =$_POST['br_city'];
	$dep_date = $_POST['dep_date'];
	$jr_no = $_POST['jr_no'];
	}
?>
<?php
$con=mysqli_connect("127.0.0.1","root","","rrb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="UPDATE new SET comm='$comm', minority='$minority', minoritycomm='$minoritycomm', gender='$gender', reli='$reli', gtexsm='$gtexsm', ph='$ph', ph_yes='$ph_yes', id_mark='$id_mark', a1='$a1', a2='$a2', a3='$a3', a4='$a4', a5='$a5', b1='$b1', b2='$b2', b3='$b3', b4='$b4', b5='$b5', c1='$c1', c2='$c2', c3='$c3', c4='$c4', c5='$c5', d1='$d1', d2='$d2', d3='$d3', d4='$d4', d5='$d5', e1='$e1', e2='$e2', e3='$e3', e4='$e4', e5='$e5', padd='$padd', pcity='$pcity', ppin='$ppin', pdist='$pdist', pstate='$pstate', nrly='$nrly', sameadd='$sameadd', cadd='$cadd', ccity='$ccity', cpin='$cpin', cdist='$cdist', married='$married', medium='$medium', ageRelx='$ageRelx', ageReason='$ageReason', gtemp1='$gtemp1', gtemp2='$gtemp2', gtemp3='$gtemp3', gtemp4='$gtemp4', exsm1='$exsm1', exsm2='$exsm2', exsm3='$exsm3', exsm4='$exsm4', fnp='$fnp', fns='$fns', br_name='$br_name', br_code='$br_code', br_city='$br_city', dep_date='$dep_date', jr_no='$jr_no'  
WHERE regno='$regno'";

//$sql="INSERT INTO new(cname, fname, mname, comm, minority, minoritycomm, gender, bdd, bmm, byy, reli, gtexsm, ph, ph_yes, id_mark, a1, a2, a3, a4, a5, b1, b2, b3, b4, b5, c1, c2, c3, c4, c5, d1, d2, d3, d4, d5, e1, e2, e3, e4, e5, padd, pcity, ppin, pdist, pstate, nrly, sameadd, cadd, ccity, cpin, cdist, married, medium, fees, feeReason, ageRelx, ageReason)
//VALUES
//('$cname','$fname','$mname','$comm','$minority','$minoritycomm','$gender','$bdd','$bmm','$byy','$reli','$gtexsm','$ph','$ph_yes','$id_mark','$a1','$a2','$a3','$a4','$a5','$b1','$b2','$b3','$b4','$b5','$c1','$c2','$c3','$c4','$c5','$d1','$d2','$d3','$d4','$d5','$e1','$e2','$e3','$e4','$e5','$padd','$pcity','$ppin','$pdist','$pstate','$nrly','$sameadd','$cadd','$ccity','$cpin','$cdist','$married','$medium','$fees','$feeReason','$ageRelx','$ageReason')";



if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

header('location:app_sub.php');
?>

