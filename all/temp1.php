<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<p>
  <?php
$id = date_create();
$regno = date_timestamp_get($id);

echo "<center><h1>Your Registration code is </h1></center>". "<center><h1>$regno</h1></center>";

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
}

$con=mysqli_connect("127.0.0.1","root","","rrb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="INSERT INTO new(regno, cname, fname, mname, bdd, bmm, byy, fees, feeReason)
VALUES
('$regno','$cname','$fname','$mname','$bdd','$bmm','$byy','$fees','$feeReason')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

$result = mysqli_query($con,"SELECT * from new where regno='$regno';");

while($row = mysqli_fetch_array($result))
  {
  echo "your Application id is :" . $row['regno'];
  echo "<br>";
  echo "Name :" . $row['cname'];
  echo "<br>";
  echo "Father's Name :" . $row['fname'];
  echo "<br>";
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
      "upload/" . $regno . "P_" . $_FILES["pho"]["name"]);
      echo "Stored in: " . "upload/" . $regno . "P_" . $_FILES["pho"]["name"] ;
      $photoname = "upload/" . $regno . "P_" . $_FILES["pho"]["name"] ;
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
      "upload/" . $regno . "P_" . $_FILES["sign"]["name"]);
      echo "Stored in: " . "upload/" . $regno . "P_" . $_FILES["sign"]["name"] ;
	  $signname = "upload/" . $regno . "P_" . $_FILES["sign"]["name"] ;
	  
      }
    }
  }
else
  {
  echo "Invalid sign";
  }


?>
</p>
<table width="90%" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td>Registration No  :</td>
    <td><?php $regno ?></td>
  </tr>
  <tr>
    <td>Name : </td>
    <td><?php $cname ?></td>
  </tr>
  <tr>
    <td>Father's Name : </td>
    <td><?php $fname ?></td>
  </tr>
  <tr>
    <td>Mother's Name : </td>
    <td><?php $mname ?></td>
  </tr>
  <tr>
    <td>Date of Birth : </td>
    <td><?php $dd ?>- <?php $mm ?>-<?php $yy ?></td>
  </tr>
  <tr>
    <td><div align="center"><img src="<?php echo $photoname; ?>" alt="signature" width="298" height="251" style="width:200px;height:200px;" /></div></td>
    <td><div align="center"><img src="<?php echo $signname; ?>" alt="Signature" width="241" height="50" style="width:200px;height:200px;" /></div></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td>Signature</td>
  </tr>
  <tr>
    <td height="31">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
mysqli_close($con);
?>
</body>
</html>
