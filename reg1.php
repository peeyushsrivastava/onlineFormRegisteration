<?php
$id = date_create();
$regno = date_timestamp_get($id);
$fnp = $regno.'P.jpg';
$fns = $regno.'S.jpg';
//echo "<center><h1>Your Registration code is </h1></center>". "<center><h1>$regno</h1></center>";

//vairables
$cname = $fname = $mname  = $bdd = $bmm = $byy = $fees = $feeReason ="";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$cname = $_POST['cname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$bdd = $_POST['bdd'];
	$bmm = $_POST['bmm'];
	$byy = $_POST['byy'];
	if(isset($_POST['fees'])){$fees = $_POST['fees'];}
	$feeReason = $_POST['feeReason'];
	$fnp = $regno.'P.jpg';
	$fns = $regno.'S.jpg';
}

$con=mysqli_connect("127.0.0.1","root","","rrb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 echo $fnp;
$sql="INSERT INTO new(regno, cname, fname, mname, bdd, bmm, byy, fees, feeReason, fnp, fns)
VALUES
('$regno','$cname','$fname','$mname','$bdd','$bmm','$byy','$fees','$feeReason','$fnp','$fns')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

include('conn.php');//file which contains database details

if (isset($_POST['submit'])) {//condition for checking if a user has clicked a submit button

//$regno=$_POST['regno'];//storing username input box value in a variable $Username  $_POST['UserName'] 
//$fname=$_POST['fname'];//storing $_POST['Password']  textbox in  $Password
//$mname=$_POST['mname'];
$result=mysql_query("select * from new where regno='$regno'")or die (mysql_error());//query sang database 
		
$count=mysql_num_rows($result);//isipon kn may tyakto sa query
$row=mysql_fetch_array($result);//ma return row sa database
		
		if ($count > 0){//kun may tyakto sa query e execute yah ang code sa dalom
		session_start();//para mag start ang session
		$_SESSION['regno']=$row['regno'];//kwaon ang id sang may tyakto nga username kag password ang ibotang sa $_SESSION['member_id']
		header('location:after_reg.php');
		}else{
		header('location:login_rrb.php');
		}
}


// UPLOAD SCRIPTS
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["pho"]["name"]);
$extension = end($temp);

if ((($_FILES["pho"]["type"] == "image/gif")
|| ($_FILES["pho"]["type"] == "image/jpeg")
|| ($_FILES["pho"]["type"] == "image/jpg")
|| ($_FILES["pho"]["type"] == "image/pjpeg")
|| ($_FILES["pho"]["type"] == "image/x-png")
|| ($_FILES["pho"]["type"] == "image/png"))
&& ($_FILES["pho"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["pho"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["pho"]["error"] . "<br>";
    }
  else
    {
//    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//    echo "Type: " . $_FILES["file"]["type"] . "<br>";
//    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["pho"]["name"]))
      {
      echo $_FILES["pho"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["pho"]["tmp_name"],
      "upload/" . $regno . "P.jpg");
	  //"upload/" . $regno . "P_" . $_FILES["pho"]["name"]);
      //echo "Stored in: " . "upload/" . $regno . "P_" . $_FILES["pho"]["name"] ;
      //$photoname = "upload/" . $regno . "P_" . $_FILES["pho"]["name"] ;
	  }
    }
  }
else
  {
  echo "Invalid photo";
  }

echo "<br>";

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["sign"]["name"]);
$extension = end($temp);
if ((($_FILES["sign"]["type"] == "image/gif")
|| ($_FILES["sign"]["type"] == "image/jpeg")
|| ($_FILES["sign"]["type"] == "image/jpg")
|| ($_FILES["sign"]["type"] == "image/pjpeg")
|| ($_FILES["sign"]["type"] == "image/x-png")
|| ($_FILES["sign"]["type"] == "image/png"))
&& ($_FILES["sign"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["sign"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["sign"]["error"] . "<br>";
    }
  else
    {
//    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//    echo "Type: " . $_FILES["file"]["type"] . "<br>";
//    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["sign"]["name"]))
      {
      echo $_FILES["sign"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["sign"]["tmp_name"],
      "upload/" . $regno . "S.jpg");
	  //"upload/" . $regno . "S_" . $_FILES["sign"]["name"]);
      //echo "Stored in: " . "upload/" . $regno . "P_" . $_FILES["sign"]["name"] ;
	  //$signname = "upload/" . $regno . "P_" . $_FILES["sign"]["name"] ;
	  
      }
    }
  }
else
  {
  echo "Invalid sign";
  }


?>

