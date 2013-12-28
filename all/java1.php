<!DOCTYPE html>
<html>
<head>
<script>
function validate()
{
	if( document.myForm.cname1.value == "" )
	{
	alert( "Please provide your first name!" );
     document.myForm.cname1.focus();
     return false;
   }
	if( document.myForm.cname2.value == "" )
   {
     alert( "Please provide your Last name!" );
     document.myForm.cname2.focus() ;
     return false;
   }
   if( document.myForm.fname.value == "" )
   {
     alert( "Please provide your Father name!" );
     document.myForm.fname.focus() ;
     return false;
   }
   var dropdown = document.getElementById('religion');
   var age_group_info=document.getElementById("age_group_info")
   if(dropdown.selectedIndex==0){
   alert("Please select religion");
   age_group_info.innerHTML="Please Select Religion";
   dropdown.focus();
   return false;
   }else{
	age_group_info.innerHTML="";
	return true;
	}
}
</script>
</head>

<body>
<form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onSubmit="javaScript:return validate_form();" method="post">
First name: <input type="text" name="cname1"> <br />
Last name : <input type="text" name="cname2"> <br />
Father name : <input type="text" name="fname"> <br />
Religion : <select name="religion" id="religion">
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
<br />
Sex : <input type="radio" name="sex" value="1" >
         Female
           <input type="radio" name="sex" value="2" >
       Male  

<input type="button" value="Submit" onClick="javaScript:validate();">
</form>
</body>

</html>
