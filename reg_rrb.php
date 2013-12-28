<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Apply online</title>
<script src="registration.js" type="text/javascript"></script>
<script type="text/javascript" src="/browserCheck.js"> </script>

<link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body onload="firstfocus();" onunload="javaScript:return underage();">

<div id="heading"><center><h2>New Registration</h2></center></div>
<h4>Mandatory Fields *</h4>

<fieldset>
<legend> Personal Details</legend>
<form name="theForm" method="post" action="reg1.php" enctype="multipart/form-data"  onsubmit="javaScript:return validateform(theForm);">
<table width="90%" border="0" cellpadding="10" align="center">

  <tr>
    <td width="33%"><div align="justify">1. Candidate Name : </div></td>
    <td width="67%" colspan="2"><input name="cname" type="text" id="cname" tabindex="1" size="35" maxlength="35" required/></td>
  </tr>
  <tr>
    <td>2. Father's Name : </td>
    <td colspan="2"><input name="fname" type="text" id="fname" tabindex="2" size="35" maxlength="35" required/></td>
  </tr>
  <tr>
    <td>3. Mother's Name : </td>
    <td colspan="2"><input name="mname" type="text" id="mname" size="35" maxlength="35" required/></td>
  </tr>
  <tr>
    <td>6. Date of Birth : </td>
    <td colspan="2"><select id="bdd" name="bdd" required>
        <option value="">Day</option>
        <option value="01">1</option>
        <option value="02">2</option>
        <option value="03">3</option>
        <option value="04">4</option>
        <option value="05">5</option>
        <option value="06">6</option>
        <option value="07">7</option>
        <option value="08">8</option>
        <option value="09">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
        <select name="bmm" id="bmm" required>
          <option value="">Month</option>
          <option value="01">Jan</option>
          <option value="02">Feb</option>
          <option value="03">Mar</option>
          <option value="04">Apr</option>
          <option value="05">May</option>
          <option value="06">Jun</option>
          <option value="07">Jul</option>
          <option value="08">Aug</option>
          <option value="09">Sep</option>
          <option value="10">Otc</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
        <select id="byy" name="byy" required>
          <option selected="selected" value="">Year</option>
          <option value="1980">1980</option>
          <option value="1981">1981</option>
          <option value="1982">1982</option>
          <option value="1983">1983</option>
          <option value="1984">1984</option>
          <option value="1985">1985</option>
          <option value="1986">1986</option>
          <option value="1987">1987</option>
          <option value="1988">1988</option>
          <option value="1989">1989</option>
          <option value="1990">1990</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
          <option value="1994">1994</option>
          <option value="1995">1995</option>
          <option value="1996">1996</option>
          <option value="1997">1997</option>
          <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
      </select></td>
  </tr>
  <tr>
    <td>Are you seeking Fee exemption :- </td>
    <td><label>
      <input type="radio" name="fees" value="Y" onclick="document.getElementById('exemption').style.display=''" required/>
      Yes</label>
        <label>
        <input type="radio" name="fees" value="N" onclick="document.getElementById('exemption').style.display='none'" required/>
          No</label>    </td>
    <td><div id="exemption" align="center"> <span class="notice"> ( If Yes, Please Select ) :</span>
          <select name="feeReason" id="feeReason">
            <option value="">--Select--</option>
            <option value="01">Economically backward class candidate</option>
            <option value="02">Minority Candidate</option>
            <option value="03">Female Candidate</option>
            <option value="04">SC/ST Candidate</option>
            <option value="05">Ex-Serviceman</option>
            <option value="06">Physically Handicapped</option>
          </select>
    </div></td>
  </tr>
  <tr>
    <td>Upload Photo : </td>
    <td colspan="2"><input type="file" name="pho" id="pho"   onchange="return validateFileExtension(this)" required/></td>
  </tr>
  <tr>
    <td>Upload Signature : </td>
    <td colspan="2">
      <input type="file" name="sign" id="sign"  onchange="return validateFileExtension(this)" required/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
  </tr>
</table>
	
</form> 
<table border="1" align="center" id="photo_tab" style="display: none;">
  <tr>
    <td><b>Photo</b></td>
    <td><b>Required Dimensions</b></td>
    <td><b>Uploaded Dimensions</b></td>
  </tr>
  <tr>
    <td>File Size</td>
    <td >Less than 100 kb</td>
    <td ></td>
  </tr>   
 </table>
 <table border="1" align="center" id="sign_tab" style="display: none;">
  <tr>
    <td><b>Signature</b></td>
    <td><b>Required Dimensions</b></td>
    <td><b>Uploaded Dimensions</b></td>
  </tr>
  <tr>
    <td>File Size</td>
    <td >Less than 25 kb</td>
    <td ></td>
  </tr>   
 </table> 
</fieldset>
</body>
</html>
