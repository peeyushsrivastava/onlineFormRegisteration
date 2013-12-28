// Java Document
// detect browser
var val = navigator.userAgent.toLowerCase();
if ((val.indexOf("chrome") > -1) || (val.indexOf("msie") > -1) || val.indexOf("mozilla") > -1)
        {}
		else
		{
		alert("Please Use IE 7 or above and Google Chrome To register,You wont be able to Submit the form in other Browsers");
        document.location.href = "browser.htm";
        }
window.history.forward();
function noBack() 
{
window.history.forward();
}

// After form loads focus will go to User id field.
function firstfocus()
{
window.history.forward();
var uid = document.theForm.cname.focus();
document.getElementById('exemption').style.display = 'none';
return true;
}

	function validateform(theForm)
{
var bdd = document.dob.bdd.value;
var bmm = document.dob.bmm.value;
var byy = document.dob.byy.value;
var d = byy.concat(bmm,bdd)
//alert(d);
var underage = 19970101;
//var overage = 19810101;
//if ((d > underage) || (d < overage))
if (d > underage)
{
alert("You are Under age");
document.dob.bdd.focus();
return false;
}
if(document.getElementById("cname").value.length < 3)
                   {                                  
                       alert("Please enter Correct Name.");
                       document.getElementById("cname").focus();
                       return false;
                   }
                  if(document.getElementById("cname").value !="" && document.getElementById("cname").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Name.");
                       document.getElementById("cname").focus();
                       return false;
                   }
                  if(document.getElementById("cname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Name.");
                       document.getElementById("cname").focus();
                       return false;                       
                   }
// to validate father name
if(document.getElementById("fname").value.length < 3)
                   {                                  
                       alert("Please enter Correct Father's Name.");
                       document.getElementById("fname").focus();
                       return false;
                   }
                  if(document.getElementById("fname").value !="" && document.getElementById("fname").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Father's Name.");
                       document.getElementById("fname").focus();
                       return false;
                   }
                  if(document.getElementById("fname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Father's Name.");
                       document.getElementById("fname").focus();
                       return false;                       
                   }
// to validate mother's name
if(document.getElementById("mname").value.length < 3)
                   {                                  
                       alert("Please enter Correct Mother's Name.");
                       document.getElementById("mname").focus();
                       return false;
                   }
                  if(document.getElementById("mname").value !="" && document.getElementById("mname").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Mother's Name.");
                       document.getElementById("mname").focus();
                       return false;
                   }
                  if(document.getElementById("mname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Mother's Name.");
                       document.getElementById("mname").focus();
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
//to validate fee exemption
if (( document.theForm.fees[0].checked == false ) && ( document.theForm.fees[1].checked == false ))
   {
    alert ( "Please Select Fee exemption" );
    document.theForm.fees[0].focus();
    return (false);
	}
   else if (( document.theForm.fees[0].checked == true ) && (theForm.feeReason.selectedIndex==0))
   {
    alert("Please Select Reason for Fees exemption");
    theForm.feeReason.focus();
    return (false);
  }
return (true);
}



function underage()
{
var bdd = document.dob.bdd.value;
var bmm = document.dob.bmm.value;
var byy = document.dob.byy.value;
var d = byy.concat(bmm,bdd)
//alert(d);

var underage = 19970101;
//var overage = 19810101;
//if ((d > underage) || (d < overage))
if (d > underage)
{
alert("You are Under age");
document.dob.bdd.focus();
return false;
}
return true;
}

