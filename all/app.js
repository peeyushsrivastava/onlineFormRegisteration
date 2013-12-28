// Java Document
// After form loads focus will go to User id field.
  function firstfocus()
  {
  var uid = document.theForm.cname.focus();
  return true;
  }

// function to validate form data

	function validateform(theForm)
{
if (theForm.cname.value.length < 3)
   {
    alert("Please Enter Your Correct Name");
    document.theForm.cname.focus();
    return (false);
  }
	if ( ( document.theForm.gender[0].checked == false ) && ( document.theForm.gender[1].checked == false ) )
   {
    alert ( "Please choose Gender!" );
    document.theForm.gender[0].focus();
    return (false);
   }
	
	if (theForm.comm.selectedIndex==0)
   {
    alert("Please Select Your Community");
    theForm.comm.focus();
    return (false);
  }

  

var chks = document.getElementsByName('education');
var hasChecked = false;

for (var i = 0; i < chks.length; i++)
{
	if (chks[i].checked)
	{
	hasChecked = true;
	break;
	}
}

if (hasChecked == false)
	{
	alert("Please select at least one.");
	theForm.education[0].focus();
    return (false);
	}
return true;
  return (true);
}
