<!DOCTYPE html>
<html lang="ar">
<head>
	<title>تسجيل الطلاب</title>
 <link href="css/background.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">

	<style>
.inner-container{
  width:70%;
  top:calc(50vh - 250px);
  left:calc(50vw - 500px);
    margin-left:180px;
}
form{background:url(img/img/hero.jpg);
border-radius:20px;
padding:50px;
height:90%;
font-size:18px ;
text-align:center;
margin:50px;
}
.control-label{color":#FFF;}
input{text-align:center;}
</style>
</head>
<body >
<?php
 include"nav_part.php";
?>

<div class="inner-container" >
<center>
			<fieldset  style="width:100%">		

	<form action="insert_privilege.php" method="post">                                
<div class="form-group has-success"
<label class="control-label" for="inputSuccess1">الاسم 
</label>
<input required type="text" name="p_name" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your name">
<label class="control-label" for="inputSuccess1">اسم المستخدم
</label>
<input type="text" name="p_username" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your username">
<label class="control-label" for="inputSuccess1">الرقم السرى
</label>
<input required type="text" name="p_password" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your password">
<input type="submit" name="submit" value="اشتراك" />
</form>
</div>
  
</center>
</div>
 <?php
 include"footer.php";
?>

</body>
</html>
