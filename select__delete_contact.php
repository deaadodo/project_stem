<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>select_grdelete</title>
<link href="css/background.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">
<link href="css/css/bootstrap.css" rel="stylesheet">

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
	$sql = "SELECT * FROM contact" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
<form method="get" action="contact_delete.php">
	<fieldset>
		<input type="hidden" name="c_id" value="<?php echo "$row[co_id]"?>" /><br /><br/>


		Name<br/><input type="text" name="c_name" value="<?php echo "$row[co_name]"?>" /><br /><br/>

		Email<br/><input type="text" name="c_email" value="<?php echo "$row[co_email]"?>" /><br />						<br/>

		 Massege:<br/><input type="text" name="c_massege" value="<?php echo "$row[co_massege]"?>" /><br/><br/>

<input class="btn-primary" type="submit" name="submit" value="حذف" />
	</fieldset>
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