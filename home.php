<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script src="home_val.js" type="text/javascript">
</script>
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body onload="firstfocus();">
<?php 
include('conn.php');
include('session.php');
if (($row['comm'] != "") && ($row['gender'] != "")) {header('location:app_sub.php');}
?>
<script type="text/javascript">
var challan = "<?php echo $row['fees']; ?>";
</script>


<p><a href="logout_rrb.php">logout</a>
 
<div align="center"><h1>Application Form</h1></div>
</h1>

<h2><center><noscript class="notice"><br /><br /><br /><br /><br /> Please Enable JavaScript In your Browser And Continue <br /><br /><br /><br /><br /></noscript></center></h2>
<div> <h3> Your Registration Id is : <?php echo $row['regno']; ?></h3>
<h3> Your Application Number is : <?php echo $row['app']; ?></h3>
</div>


 <h4>Mandatory Fields *</h4>
<form id="theForm" name="theForm" method="post" action="insert.php" onsubmit="javaScript:return validateform(theForm);">
<?php

if ($row['fees'] == 'N')
{
echo '<fieldset>
<legend>Bank Challan Details  <span class="notice">(For those who had deposited Fee)</span></legend>

<table width="78%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="17%" height="37">Branch Name : </td>
    <td colspan="3"><input name="br_name" type="text" id="br_name" size="80" /></td>
    </tr>
  <tr>
    <td>Branch City : </td>
    <td width="23%"><input name="br_city" type="text" id="br_city" maxlength="20" /></td>
    <td width="16%">Branch Code : </td>
    <td width="44%"><input name="br_code" type="text" id="br_code" /></td>
  </tr>
  <tr>
    <td> Date of Deposit <br /></td>
    <td><input name="dep_date" type="text" id="dep_date" /></td>
    <td>Journal No :</td>
    <td><input name="jr_no" type="text" id="jr_no" /></td>
  </tr>
</table>
</fieldset>
'; }
?>
<!--<fieldset>
<legend>Bank Challan Details  <span class="notice">(For those who had deposited Fee)</span></legend>

<table width="78%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="17%" height="37">Branch Name : </td>
    <td colspan="3"><input name="br_name" type="text" id="br_name" size="80" /></td>
    </tr>
  <tr>
    <td>Branch City : </td>
    <td width="23%"><input name="br_city" type="text" id="br_city" maxlength="20" /></td>
    <td width="16%">Branch Code : </td>
    <td width="44%"><input name="br_code" type="text" id="br_code" /></td>
  </tr>
  <tr>
    <td> Date of Deposit <br /></td>
    <td><input name="dep_date" type="text" id="dep_date" /></td>
    <td>Journal No :</td>
    <td><input name="jr_no" type="text" id="jr_no" /></td>
  </tr>
</table>
</fieldset>
-->
<br />

<fieldset>
<legend>General Information</legend>
<table width="89%" border="0" cellpadding="5">
  <tr>
    <td width="40%" height="50">1. Candidate Name :</td>
    <td width="40%"><input name="cname" type="text" id="cname"  size="35" maxlength="35" value="<?php echo $row['cname']; ?>" disabled="disabled" /></td>
    <td width="40%" colspan="2" rowspan="3">
      <div align="center"><img src="<?php echo "upload/";echo $row['regno'];echo "P.jpg"; ?>" alt="Candidates photo not uploaded" name="pho" width="106" height="110" id="pho" />
          <br />
          <img src="<?php echo "upload/";echo $row['regno'];echo "S.jpg"; ?>" alt="Candidates Sign" name="sign" width="152" height="33" id="sign" /> 
      </div></td>
  </tr>
  <tr>
    <td height="50">2. Fathers Name : </td>
    <td><input name="fname" type="text" id="fname" tabindex="2" size="35" maxlength="35" value="<?php echo $row['fname']; ?>" disabled="disabled"/></td>
    </tr>
  <tr>
    <td height="50">3. Mothers Name : </td>
    <td><input name="mname" type="text" id="mname" size="35" maxlength="35" value="<?php echo $row['mname']; ?>" disabled="disabled"/></td>
  </tr>
  </table>
<table width="90%" border="0" cellpadding="10">  <tr>
    <td>4. Community : </td>
    <td colspan="2"><input name="comm" id="comm" type="radio" value="UR" onclick="document.getElementById('comunity').style.display='none'" />
UR
  <input name="comm" id="comm" type="radio" value="SC"  onclick="document.getElementById('comunity').style.display='none'" />
SC
<input name="comm" id="comm" type="radio" value="ST" onclick="document.getElementById('comunity').style.display='none'" />
ST
<input name="comm" id="comm" type="radio" value="OBC" onclick="document.getElementById('comunity').style.display=''"/>
OBC<br />
<br />
	  <div id="comunity"><span class="notice">* Please state whether belonging to Minority Community :</span>
        <label>
        <input type="radio" name="minority" value="Y" onclick="document.getElementById('mincomm').style.display=''"/>
Yes</label>
        <label>
        <input type="radio" name="minority" value="N" onclick="document.getElementById('mincomm').style.display='none'"/>
No</label></div><br />
      <div id="mincomm">
      <span class="notice">* Indicate community :</span> 
        <select name="minoritycomm" id="minoritycomm">
          <option value="0">Select</option>
          <option value="01">Muslim</option>
          <option value="02">Christian</option>
          <option value="03">Sikh</option>
          <option value="04">Parsi</option>
        </select></div>      </td>
  </tr>
  <tr>
    <td>5. Gender </td>
    <td colspan="2"><label>
      <input type="radio" name="gender" value="M" />
Male</label>
      <input type="radio" name="gender" value="F" />
Female</td>
  </tr>
  <tr>
    <td>6. Date of Birth : </td>
    <td colspan="2"><input name="dob1" type="text" id="dob1" size="2" disabled="disabled" value="<?php echo $row['bdd']; ?>"/>
      -   
        <input name="dob2" type="text" id="dob2" size="2" disabled="disabled" value="<?php echo $row['bmm']; ?>"/>
        -
      <input name="dob3" type="text" id="dob3" size="4" disabled="disabled" value="<?php echo $row['byy']; ?>"/></td>
  </tr>
  <tr>
    <td>7. Religion : </td>
    <td colspan="2"><input type="radio" name="reli" value="01" />
Hindu
  <input type="radio" name="reli" value="02" />
Muslim
<input type="radio" name="reli" value="03" />
Christian
<input type="radio" name="reli" value="04" />
Sikh
<input type="radio" name="reli" value="05" />
Buddhist
<input type="radio" name="reli" value="06" />
Jain
<input type="radio" name="reli" value="07" />
Others</td>
  </tr>
  <tr>
    <td>8. Are you : </td>
    <td colspan="2"><label>
      <input name="gtexsm" type="checkbox" id="gtexsm" value="GT" onclick="gtemp();"/>
        Govt. Employee</label>
      <label>
        <input type="checkbox" name="gtexsm" id="gtexsm" value="EX" onclick="exsm();"/>
        Ex Servicemen</label>      </td>
  </tr>
      <tr>
      <td colspan="3"><div align="center" id="gtemp">
	  <span class="notice"> Present employment (to be filled by Railway/Centeral/State/PSU employees)</span>
        <table width="90%" border="1" cellspacing="5" cellpadding="5">
        <tr>
          <th width="27%">Designation and Grade </th>
		  <th width="13%">Date from </th>
		  <th width="14%">Date to </th>
		  <th width="46%">Name &amp; Address of Employer </th>
          </tr>
        <tr>
          <td><div align="center">
            <input name="gtemp1" type="text" id="gtemp1" size="35" />
          </div></td>
          <td><div align="center">
            <input name="gtemp2" type="text" id="gtemp2" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
            <input name="gtemp3" type="text" id="gtemp3" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
            <input name="gtemp4" type="text" id="gtemp4" size="50" />
          </div></td>
        </tr>
      </table></div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center" id="exsm">
	  <span class="notice"> Ex-Serviceman (EX-SM) </span>
        <table width="90%" border="1" cellspacing="5" cellpadding="5">
        <tr>
          <th width="27%">Date of enrolment </th>
          <th width="24%">Date of attestation </th>
          <th width="26%">Date of Discharge </th>
          <th width="23%">Length of Service </th>
        </tr>
        <tr>
          <td><div align="center">
            <input name="exsm1" type="text" id="exsm1" size="35" />
          </div></td>
          <td><div align="center">
            <input name="exsm2" type="text" id="exsm2" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
              <input name="exsm3" type="text" id="exsm3" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
              <input name="exsm4" type="text" id="exsm4" size="15" />
          </div></td>
        </tr>
      </table></div></td>
    </tr>
    <tr>
    <td>9. Are you Person with Disabilities  </td>
    <td colspan="2"><p>
      <label>
      <input type="radio" name="ph" value="Y" onclick="document.getElementById('phtype').style.display=''" />
        Yes</label>
      <label>
        <input type="radio" name="ph" value="N" onclick="document.getElementById('phtype').style.display='none'"/>
        No</label></p>
      <div id="phtype" > <label> <span class="notice">( If Yes, Please Select ) :</span> 
          <select name="ph_yes" id="ph_yes">
          <option value="0">Select</option>
          <option value="VH">VH</option>
          <option value="OH">OH</option>
          <option value="HH">HH</option>
        </select></label>
        </div>
      </p></td>
  </tr>
  <tr>
    <td>10. Visible Mark of Idendification on Body </td>
    <td colspan="2"><input name="id_mark" type="text" id="id_mark" size="20" maxlength="20" /> 
    <span class="notice">(If No such mark write &quot;NIL&quot;)</span> </td>
  </tr>
</table>

<h2><center><noscript class="notice"><br /><br /><br /><br /><br /> Please Enable JavaScript In your Browser And Continue <br /><br /><br /><br /><br /></noscript></center></h2>
</fieldset>
<br />
<br />
<fieldset>
<legend> 11. Educational Qualification :</legend>

  <table width="100%" border="1" cellspacing="2" cellpadding="5">
    <tr>
      <td width="22%"><div align="center"><strong>Academic</strong></div></td>
      <td width="18%"><div align="center"><strong>Qualification</strong></div></td>
      <td width="23%"><div align="center"><strong>Univ/Board</strong></div></td>
      <td width="10%"><div align="center" class="style1">Year of Passing </div></td>
      <td width="17%"><div align="center"><strong>Subject</strong></div></td>
      <td width="10%"><div align="center"><strong>Marks (%) </strong></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>SSC / X / Matric</strong></div></td>
      <td>          <div align="center">
          <input type="text" id="a1" name="a1" />        
      </div></td>
      <td>          <div align="center">
          <input name="a2" type="text" id="a2" size="35" />        
      </div></td>
      <td>          <div align="center">
          <input name="a3" type="text" id="a3" size="5" maxlength="4" />        
      </div></td>
      <td>          <div align="center">
          <input type="text" id="a4" name="a4" />        
      </div></td>
      <td>          <div align="center">
          <input name="a5" type="text" id="a5" size="5" maxlength="5" />        
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Hr. Sec./ XII / Inter </strong></div></td>
      <td><div align="center">
        <input type="text" id="b1" name="b1" />
      </div></td>
      <td><div align="center">
        <input name="b2" type="text" id="b2" size="35" />
      </div></td>
      <td>
        <div align="center">
          <input name="b3" type="text" id="b3" size="5" maxlength="4" />
        </div></td>
      <td>
        <div align="center">
          <input type="text" id="b4" name="b4" />
        </div></td>
      <td>
        <div align="center">
          <input name="b5" type="text" id="b5" size="5" maxlength="5" />
        </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Graduation</strong></div></td>
      <td><div align="center">
        <input type="text" id="c1" name="c1" />
      </div></td>
      <td><div align="center">
        <input name="c2" type="text" id="c2" size="35" />
      </div></td>
      <td>
        <div align="center">
          <input name="c3" type="text" id="c3" size="5" maxlength="4" />
        </div></td>
      <td>
        <div align="center">
          <input type="text" id="c4" name="c4" />
        </div></td>
      <td>
        <div align="center">
          <input name="c5" type="text" id="c5" size="5" maxlength="5" />
        </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Post Graduation </strong></div></td>
      <td><div align="center">
        <input type="text" id="d1" name="d1" />
      </div></td>
      <td><div align="center">
        <input name="d2" type="text" id="d2" size="35" />
      </div></td>
      <td>
        <div align="center">
          <input name="d3" type="text" id="d3" size="5" maxlength="4" />
        </div></td>
      <td>
        <div align="center">
          <input type="text" id="d4" name="d4" />
        </div></td>
      <td>
        <div align="center">
          <input name="d5" type="text" id="d5" size="5" maxlength="5" />
        </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Others</strong></div></td>
      <td><div align="center">
        <input type="text" name="e1" />
      </div></td>
      <td><div align="center">
        <input name="e2" type="text" size="35" />
      </div></td>
      <td><div align="center">
        <input name="e3" type="text" size="5" maxlength="4" />
      </div></td>
      <td>
        <div align="center">
          <input type="text" name="e4" />
        </div></td>
      <td>
        <div align="center">
          <input name="e5" type="text" size="5" />
        </div></td>
    </tr>
  </table>
</fieldset>
<br />
<br />
<h2><center><noscript class="notice"><br /><br /><br /><br /><br /> Please Enable JavaScript In your Browser And Continue <br /><br /><br /><br /><br /></noscript></center></h2>
<fieldset>
<legend>Address</legend>
<table width="100%" border="0" cellspacing="2" cellpadding="10">
  <tr>
    <td>12. Permanent Address :- </td>
    <td colspan="2">Address:<br />
        <textarea name="padd" cols="50" id="padd" rows="2"  ></textarea>
        
      <p>
        City:-
          <input name="pcity" type="text" id="pcity" size="15" maxlength="15" />
        
         Pin Code :-
        <input name="ppin" type="text" id="ppin" size="15" maxlength="6" />
      </p>
      <p>Dist :-
        <input name="pdist" type="text" id="pdist" size="15" /> 
      State :- 
      <select name="pstate" id="pstate"  >
        <option value="--Select--">--Select--</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Delhi">Delhi</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Goa">Goa</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Orissa">Orissa</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
        <option value="Daman &amp; Diu">Daman &amp; Diu</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="OTHER - not from India">OTHER - not from India</option>
      </select>
      </p></td>
  </tr>
  <tr>
    <td>13. Nearest Railway Station :- </td>
    <td colspan="2"><input name="nrly" type="text" id="nrly" size="35" maxlength="35" /> 
    <span class="notice">( For Issuing free Railway Pass to SC/ST candidates)</span></td>
  </tr>
  <tr>
    <td> 14. Correspondence Address :-  </td>
    <td colspan="2"><p>
      <label>
      If Same as Permanent Address ( Select Yes ) :-
      <input type="radio" name="sameadd" value="Y" onclick="document.getElementById('caddress').style.display='none'" />
Yes</label>
      <label>
      <input type="radio" name="sameadd" value="N" onclick="document.getElementById('caddress').style.display=''" />
No</label><br /><div id="caddress">Address:<br />
        <textarea name="cadd" cols="50" rows="2" id="cadd"></textarea>
        </p>
      </p>
      
        <p> City:-
        <input name="ccity" type="text" id="ccity" size="15" />
        Pin Code :-
  <input name="cpin" type="text" id="cpin" size="15" />
      </p>
      <p>Dist :-
        <input name="cdist" type="text" id="cdist" size="15" />
      State :- 
      <select name="cstate" id="cstate" >
        <option value="--Select--">--Select--</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Delhi">Delhi</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Goa">Goa</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Orissa">Orissa</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
        <option value="Daman &amp; Diu">Daman &amp; Diu</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="OTHER - not from India">OTHER - not from India</option>
      </select>
      </p></div>      </td>
  </tr>
  <tr>
    <td>15. Marital Status :- </td>
    <td colspan="2"><p>
      <label>
        <input type="radio" name="married" value="S" />
        Single</label>
      <label>
        <input type="radio" name="married" value="M" />
        Married</label>
    </p></td>
  </tr>
  <tr>
    <td>16. Medium of Examination :- </td>
    <td colspan="2"><select name="medium" id="medium">
      <option value="0">--select--</option>
      <option value="01">HINDI</option>
      <option value="02">ENGLISH</option>
    </select>    </td>
  </tr>
  <tr>
    <td>17. Nationality </td>
    <td><p>
      <label>
        <input type="radio"  id="nationality" name="nationality" value="01" />
        Indian</label>
      <label>
        <input type="radio" id="nationality" name="nationality" value="02" />
        Others</label>
      <br />
    </p></td>
  </tr>
  <tr>
    <td>18. Are you seeking Age relaxation :- </td>
    <td><label>
      <input name="ageRelx" type="radio" value="Y" onclick="document.getElementById('relx').style.display=''"/>
Yes</label>
      <label>
      <input type="radio" name="ageRelx" value="N" onclick="document.getElementById('relx').style.display='none'"/>
No</label></td>
    <td><div id="relx" align="center">
	<span class="notice"> ( If Yes, Please Select ) :</span>
	   <select name="ageReason" id="ageReason">
      <option value="0">--Select--</option>
      <option value="01">SC / ST</option>
      <option value="02">OBC</option>
      <option value="03">Ex-SM</option>
      <option value="04">PWD</option>
      <option value="05">Railway Employee</option>
      <option value="06">Judicially Seprated</option>
      <option value="07">Divorced Woman</option>
      <option value="08">Widow</option>
      <option value="09">J &amp; K resident</option>
      <option value="10">Course Completed Act Appremtice</option>
    </select></div></td>
  </tr>
</table>

</fieldset>
<div align="center">
<input type="reset" value="Reset">
 <input type="submit" name="submit" id="submit" value="Submit" /></div>
</form>



</body>
</html>
