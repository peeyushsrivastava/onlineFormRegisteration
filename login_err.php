<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Error Logging In</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/browserCheck.js"> </script>
<script type="text/javascript">
function noBack() 
{
window.history.forward();
}
function firstfocus()
{
window.history.forward();
var uid = document.theForm.regno.focus();
return true;
}
	function validateform(theForm)
{
if(document.getElementById("regno").value.length < 10)
                   {                                  
                       alert("Please enter Correct Registration No.");
                       document.getElementById("regno").focus();
                       return false;
                   }
                  if(document.getElementById("regno").value !="" && document.getElementById("regno").value.search("[^0-9]")>-1)
                   {
                       alert("Please enter only Numbers for Registration Number.");
                       document.getElementById("regno").focus();
                       return false;
                   }

// to validate day of date of birth                   }
if (theForm.bdd.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.bdd.focus();
    return (false);
  }
// to validate month of date of birth
if (theForm.bmm.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.bmm.focus();
    return (false);
  }
// to validate year of date of birth
if (theForm.byy.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.byy.focus();
    return (false);
  }
return (true);
}

</script>
</head>

<body onload="firstfocus()">
<center><h2>Login Page </h2></center>
<div align="center">
<form method="post" name="theForm" action="login1_rrb.php" onsubmit="javascript: return validateform(theForm);">  
  <table width="431"  border="1" cellpadding="5" cellspacing="2">
    <tr>
      <td>Registration No. </td>
      <td><p>
        <input name="regno" type="text" id="regno"  size="35" maxlength="10" />
      </p>
        <p class="notice">Please Enter Correct Registration No.  </p></td>
    </tr>
    <tr>
      <td>Date of Birth </td>
      <td><p>
        <select id="bdd" name="bdd">
          <option value="0">Day</option>
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
        <select name="bmm" id="bmm">
          <option value="0">Month</option>
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
        <select id="byy" name="byy">
          <option selected="selected" value="0">Year</option>
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
        </select>
      </p>
        <p class="notice">Please Enter Correct Date of Birth  </p></td>
    </tr>
    <tr>
      <td colspan="2"><center><input type="submit" name="submit" value="Login"/></center></td>
      </tr>
  </table>
</form>
</div>
</body>
</html>
