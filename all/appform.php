<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="app.js">
</script>
</head>

<body onload="firstfocus();">
<form id="theForm" name="theForm" method="post" action="">
  <p>Name : 
    <input name="cname" type="text" />
  </p>
  <p>Community : 
    <select name="comm" >
      <option value="0">Select</option>
      <option value="01">UR</option>
      <option value="02">SC</option>
      <option value="03">ST</option>
      <option value="04">OBC</option>
    </select>
    <input name="" value="Submit" type="submit" onclick="validateform();" />
    </p>
</form>
</body>
</html>
