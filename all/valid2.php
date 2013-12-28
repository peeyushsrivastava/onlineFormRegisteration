<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form 26</title>
<style>
.error {color: #FF0000;}
</style>

<script type="text/javaScript">
function validate_dropdown1(){
var dropdown = document.getElementById('religion');
var age_group_info=document.getElementById("age_group_info")
if(dropdown.selectedIndex==0){
alert("Please select religion");
age_group_info.innerHTML="Please Select Religion";
dropdown.focus();
return false; 
}
}
</script>

</head>

<body>

<?php
$cname1Err = $cname2Err = $fnameErr = $natErr = $genderErr = $religionErr = $ddErr = $mmErr = $yyErr = "";
$cname1 = $cname2 = $fname = $nat = $gender = $dd = $mm = $yy = $religion = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      if (empty($_POST["cname1"]))
	  {$cname1Err = "First Name is required";}
	  else
	  {
	  $cname1 = test_input($_POST["cname1"]);
	  	if (!preg_match("/^[a-zA-Z ]*$/",$cname1))
	  		{
			$cname1Err = "Only letters and white space allowed";
			}
	  }
	  if (empty($_POST["cname2"]))
	  {$cname2Err = "Last Name is required";}
	  else
	  {
	  $cname2 = test_input($_POST["cname2"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$cname2))
	  {$cname2Err = "Only letters and white space allowed";}
	  }
	  if (empty($_POST["fname"]))
	  {$fnameErr = "Father's Name is required";}
	  else
	  {
	  $fname = test_input($_POST["fname"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$fname))
	  {
	  $fnameErr = "Only letters and white space allowed";
	  }
	  }
	  if (empty($_POST["nat"]))
	  {$natErr = "Nationality is required";}
	  else
	  {
	  $nat = test_input($_POST["nat"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$nat))
	  {
	  $natErr = "Only letters and white space allowed";
	  }
	  }
	  if (empty($_POST["dd"]))
	  {$ddErr = "First Name is required";}
	  else
	  {
	  $dd = test_input($_POST["dd"]);
	  if (!preg_match("/^[0-9]*$/",$dd))
	  {
	  $ddErr = "Only 0-9 allowed";
	  }
	  }
	  
	  if (empty($_POST["mm"]))
	  {$mmErr = "First Name is required";}
	  else
	  {
	  $mm = test_input($_POST["mm"]);
	  if (!preg_match("/^[0-9]*$/",$mm))
	  {
	  $mmErr = "Only 0-9 allowed";
	  }
	  }
	  
	  if (empty($_POST["yy"]))
	  {$yyErr = "First Name is required";}
	  else
	  {
	  $yy = test_input($_POST["yy"]);
	  if (!preg_match("/^[0-9]*$/",$yy))
	  {
	  $yyErr = "Only 0-9 allowed";
	  }
	  }
}	  
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onSubmit="javaScript:return validate_form();"> 
<fieldset>
<legend><center>Personal Details</center></legend>
   <table width="100%" border="2">
     <tr>
       <td>First Name: </td>
       <td><input type="text" name="cname1" value="<?php echo $cname1;?>" required>
       <span class="error">*<?php echo $cname1Err;?></span></td>
     </tr>
     <tr>
       <td>Last Name:</td>
       <td><input type="text" name="cname2" value="<?php echo $cname2;?>" required>
       <span class="error">* <?php echo $cname2Err;?></span> </td>
     </tr>
     <tr>
       <td>Father Name:</td>
       <td><input type="text" name="fname" value="<?php echo $fname;?>" required>
         <span class="error">* <?php echo $fnameErr;?></span></td>
     </tr>
     <tr>
       <td>Nationality:</td>
       <td><input type="text" name="nat" value="<?php echo $nat;?>" required>
         <span class="error">* <?php echo $natErr;?></span></td>
     </tr>
     <tr>
       <td>Religion:</td>
       <td><select name="religion" id="religion">
    <option value="0" selected>--Select--</option>
    <option value="HINDU">Hindu</option>
    <option value="MUSLIM">Muslim</option>
    <option value="SIKH">Sikh</option>
    <option value="CHRISTIAN">Christian</option>
    <option value="BUDDHIST">Buddhist</option>
    <option value="PARSI">Parsi</option>
    <option value="JAIN">Jain</option>
    <option value="OTHERS">Others</option>
       </select>
  <label id="age_group_info" style="color: red; font-style: italic;"></label>

	   </td>
     </tr>
     <tr>
       <td>Gender:</td>
       <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female" />
         Female
           <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male" />
       Male <span class="error">* <?php echo $genderErr;?></span> </td>
     </tr>
     <tr>
       <td>Date of Birth : </td>
       <td>Date :
         <input name="dd" type="text" id="dd" value="<?php echo $dd;?>" size="2" maxlength="2" />
         <span class="error"><?php echo $ddErr;?></span> 
Month:
<input name="mm" type="text" id="mm" value="<?php echo $mm;?>" size="2" maxlength="2" />
<span class="error"><?php echo $mmErr;?></span> 
Year:
<input name="yy" type="text" id="yy" value="<?php echo $yy;?>" size="6" maxlength="4" />
<span class="error">* <?php echo $yyErr;?></span> </td>
     </tr>
     </table>
   <p>&nbsp;</p>
</fieldset>
   <input type="submit" name="submit" value="Submit" onClick="javaScript:validate_dropdown1();"> 
</form>

<p>
  <?php
echo "<h2>Your Input:</h2>";
echo $cname1;
echo "<br>";
echo $cname2;
echo "<br>";
echo $fname;
echo "<br>";
echo $nat;
echo "<br>";
echo $religion;
echo "<br>";
echo $gender;
?>

</body>
</html>