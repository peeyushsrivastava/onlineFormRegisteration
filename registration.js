// Java Document
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

function underage()
{
  //console.log(document.theForm.bdd.value);
/*var bdd = document.dob.bdd.value;
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
return true;*/
}

function myFunction(utext)
{
utext.value=utext.value.toUpperCase();
return true;
}
// function to check file extensions
function validateFileExtension(fld)
{
  var img = fld;
 /* var objImage = new Image();
      objImage.src = fld.value
      alert("width : " + objImage.width + " height : " + objImage.height);*/
  var fileSize =  fld.files[0].size;
  fileSize = Math.round(parseInt(fileSize)/1024)
  if(img.id=='pho' && (fileSize>100)){ 
    document.getElementById("photo_tab").style.display="block";
    document.getElementById("photo_tab").rows[1].cells[2].innerHTML = fileSize + 'kb';
    return false;  
  }else if(img.id=='sign' && (widthTest>100 || heightTest>40)){
    document.getElementById("sign_tab").style.display="block";
    document.getElementById("sign_tab").rows[1].cells[2].innerHTML = fileSize + 'kb';
    return false;
}
/*//or however you get a handle to the IMG
var widthTest = img.clientWidth;
var heightTest = img.clientHeight;
if(img.id=='pho' && (widthTest>200 || heightTest >80)){
  document.getElementById("photo_tab").style.display="block";
  document.getElementById("photo_tab").rows[1].cells[2].innerHTML = widthTest;
  document.getElementById("photo_tab").rows[2].cells[2].innerHTML = heightTest;
  return false;
}else if(img.id=='sign' && (widthTest>100 || heightTest>40)){
  document.getElementById("sign_tab").style.display="block";
  document.getElementById("sign_tab").rows[1].cells[2].innerHTML = widthTest;
  document.getElementById("sign_tab").rows[2].cells[2].innerHTML = heightTest;
  return false;
}*/
if(!/(\.bmp|\.gif|\.jpg|\.jpeg)$/i.test(fld.value)) {
		alert("Invalid image file type.");
		fld.focus();
		return false;
}
return true;
}

function validateform(theForm)
{
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
/*if (document.getElementById("pho").value == "")
{
alert("Please Upload Your photo");
pho.focus();
return false;
}
else if ((document.getElementById("pho").value.substr(-4) !== ".jpg") || (document.getElementById("pho").value.substr(-4) !== ".JPG") || (document.getElementById("pho").value.substr(-5) !== ".jpeg") || (document.getElementById("pho").value.substr(-5) !== ".JPEG"))
{
alert("Please Upload only Jpeg or jpg image for photo");
return false;
}

if (document.getElementById("sign").value == "")
{
alert("Please Upload Your Signatures");
sign.focus();
return false;
}
else if ((document.getElementById("sign").value.substr(-4) !== ".jpg") || (document.getElementById("sign").value.substr(-4) !== ".JPG") || (document.getElementById("sign").value.substr(-5) !== ".jpeg") || (document.getElementById("sign").value.substr(-5) !== ".JPEG"))
{
alert("Please Upload only Jpeg or jpg image for signatures");
return false;
}*/
return (true);
}

