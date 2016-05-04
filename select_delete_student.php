<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>select_grdelete</title>
<link href="css/background.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">

<style>
	body{
		margin-top:250px;}
.inner-container{
  width:70%;
  top:calc(50vh - 250px);
  left:calc(50vw - 500px);
  margin-left:170px;
}
form{background:url(img/img/hero.jpg);
border-radius:20px;
padding:50px;
height:90%;
font-size:18px ;
text-align:center;
margin:50px;
}
input{text-align:center;}
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

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM student" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
   <form method="get" action="delete_student.php">
<input type="hidden" name="s_id" value="<?php echo "$row[st_id]"?>" /><br />


Firstname<br /><input type="text" name="s_firstname" value="<?php echo "$row[st_fname]"?>" /><br />
  
Lastname<br /><input type="text" name="s_lastname" value="<?php echo "$row[st_lname]"?>" /><br />
  
Address<br /><input type="text" name="s_address" value="<?php echo "$row[st_address]"?>" /><br />
  
School<br /><input type="text" name="s_school" value="<?php echo "$row[st_school]"?>" /><br />
    
Totaldegree<br /><input type="text" name="s_totaldegree" value="<?php echo "$row[st_totaldegree]"?>" /><br />
     
Class<br /><input type="text" name="s_class" value="<?php echo "$row[st_class]"?>" /><br />

Gender<br /><input type="text" name="s_gender" value=" <?php echo "$row[st_gender]"?>"><br />

Phone<br /><input type="text" name="s_phone" value="<?php echo "$row[st_phone]"?>" /><br />


Email<br /><input type="text" name="s_email" value="<?php echo "$row[st_email]"?>" /><br />

Username<br /><input type="text" name="s_username" value="<?php echo "$row[st_username]"?>" /><br />

Password<br /><input type="text" name="s_password" value="<?php echo "$row[st_password]"?>" /><br /><br />

<input class="btn-primary" type="submit" name="submit" value="حذف" />

 </form>
  <?php
	;}
	
	
	 mysql_close($con);
	?>
   <?php
 include"footer.php";
?>

</body>
</html>