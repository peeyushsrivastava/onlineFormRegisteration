<?php
include('conn.php');//file which contains database details

if (isset($_POST['submit'])) {//condition for checking if a user has clicked a submit button
$cname=$_POST['cname'];//storing username input box value in a variable $Username  $_POST['UserName'] 
$fname=$_POST['fname'];//storing $_POST['Password']  textbox in  $Password
$mname=$_POST['mname'];
$bdd=$_POST['bdd'];
$bmm=$_POST['bmm'];
$byy=$_POST['byy'];
$result=mysql_query("select * from new where cname='$cname' and bdd='$bdd' and bmm='$bmm' and byy='$byy'")or die (mysql_error());//query sang database 
		
$count=mysql_num_rows($result);//isipon kn may tyakto sa query
$row=mysql_fetch_array($result);//ma return row sa database
		
		if ($count > 0){//kun may tyakto sa query e execute yah ang code sa dalom
		session_start();//para mag start ang session
		$_SESSION['app']=$row['app'];//kwaon ang id sang may tyakto nga username kag password ang ibotang sa $_SESSION['member_id']
		header('location:home.php');
		}else{
		header('location:index.php');
		}
}
?>

