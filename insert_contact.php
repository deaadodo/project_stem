<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ادخال الرسائل</title>
   <link href="css/background.css" rel="stylesheet">
<style>
.hh{
font-size:50px;
text-align:center;
margin:200px;
color:green;
}
</style>
</head>

<body>

 <?php
 include"nav_part.php";
?>
<?php 

$HostName="localhost";
$db_name="stemproject";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['c_name']) && isset($_POST['c_email'])&& isset($_POST['c_massege'])) {
$sql = "INSERT INTO contact (co_name,co_email,co_massege) VALUES
 ('$_POST[c_name]','$_POST[c_email]','$_POST[c_massege]')" ;
} else {
$sql = '';
}


mysql_query($sql,$con) ;

mysql_close($con);

?>
<?php

echo"<p class=hh>"."تم ارسال الرسالة بنجاح"."</p>";
?>
  <?php
 include"footer_insert.php";
?>
</body>
</html>