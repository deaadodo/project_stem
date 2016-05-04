<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<title>تسجيل اولياء الامور</title>
     <link href="css/background.css" rel="stylesheet">
	<style>
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

<div class="inner-container" >
<center>
			<fieldset  style="width:100%">			
	<form action="insert_parents.php" method="post">                                
<div class="form-group has-success">
<label class="control-label" for="inputSuccess1">الاسم
</label>
<input required type="text" name="p_name" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your name">
<label class="control-label" for="inputSuccess1">العنوان
</label>
<input required type="text" name="p_address" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your address">
<label class="control-label" for="inputSuccess1">النوع
</label><br/>
<input required type="radio" name="p_gender" value="male" checked>ذكر<br/>
  <input type="radio" name="p_gender" value="female"> انثى<br>
<label class="control-label" for="inputSuccess1">التليفون
</label>
<input required type="text" name="p_phone" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your phone">
<label class="control-label" for="inputSuccess1">الايميل
</label>
<input required type="text" name="p_email" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your email">
<label class="control-label" for="inputSuccess1">اسم المستخدم
</label>
<input required type="text" name="p_username" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your username">
<label class="control-label" for="inputSuccess1">الرقم السرى
</label>
<input required type="text" name="p_password" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your password">
<input type="submit" name="submit" value="اشتراك" />
<form/>
</fieldset>
</div>	
		

 <?php
 include"footer.php";
?>
</body>
</html>
