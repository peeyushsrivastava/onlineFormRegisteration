<!DOCTYPE HTML>
<html>
<head> 
<title>Validate List Box</title>
<style type="text/css">
.ex_table{font-family:Verdana, Geneva, sans-serif;font-size:12px;}
.listbox{border:1px solid #36F;}
.normal_lb_border{border: 1px solid #00F;}
.err_lb_border{border:1px solid #F00;}
.err_lb_bg{background-color:#FFC4C4;}
</style>

<script type="text/javaScript">
function validate_dropdown1(){
var dropdown = document.getElementById('age_group');
var age_group_info=document.getElementById("age_group_info")
if(dropdown.selectedIndex==0){
alert("Please select Age Group");
age_group_info.innerHTML="Select your Age Group";
dropdown.focus();
return false; 
}else{
age_group_info.innerHTML="";
alert("You have selected "+dropdown[dropdown.selectedIndex].text+" as your Age Group");
return true;
}
}
</script>

</head>
<body>

<form id="drop_down_validation_1" name="drop_down_validation_1" action="#" method="post" onSubmit="javaScript:return validate_form();">
<table border="0" class="ex_table">
<tbody> 
<tr>
<td colspan="3" align="left">&nbsp;</td>
</tr>
<tr>
<td align="right">Age Group</td> 
<td><select name="age_group" class="normal_lb_border" id="age_group">
<option value="0" selected>Select your age group</option>
<option value="1">10-15</option>
<option value="2">16-19</option>
<option value="3">20-25</option>
<option value="4">26-30</option>
<option value="5">31-40</option>
<option value="6">41-50</option>
<option value="7">51-60</option>
<option value="8">61-70</option>
<option value="9">71-80</option>
<option value="10">81-90</option>
<option value="11">91-100</option>
</select> 
<label id="age_group_info" style="color: red; font-style: italic;"></label>
</td> 
<td>&nbsp;</td>
</tr> 
<tr> 
<td></td> 
<td> 
<input name="btnSubmit" type="button" value="Submit" id="btnSubmit" onClick="javaScript:validate_dropdown1();"/>
</td> 
<td></td> 
</tr>
<tr>
<td colspan="3" align="right"><a href="http://kottawadumi.blogspot.com" target="_self">Programming Help</a></td>
</tr>
</tbody>
</table>
</form>
</body>
</html>