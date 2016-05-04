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

	<form action="insert_student.php" method="post">                                
<div class="form-group has-success">
<label class="control-label" for="inputSuccess1">الاسم الاول
</label>
<input required type="text" name="s_firstname" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your firstname">
<label class="control-label" for="inputSuccess1">الاسم الاخير
</label>
<input required type="text" name="s_lastname" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your lastname">
<label class="control-label" for="inputSuccess1">العنوان
</label>
<input required type="text" name="s_address" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your address">
<label class="control-label" for="inputSuccess1">المدرسة
</label>
<input required type="text" name="s_school" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your school">
<label class="control-label" for="inputSuccess1">الدرجة الكلية
</label>
<input required type="text" name="s_totaldegree" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your totaldegree">
<label class="control-label" for="inputSuccess1">الصف
</label><br/>
<input required type="radio" name="s_class" value="first" > الأول<br/>
  <input type="radio" name="s_class" value="second"> الثانى<br/>
<label class="control-label" for="inputSuccess1">النوع
</label><br/>
<input required type="radio" name="s_gender" value="male" > ذكر<br/>
  <input type="radio" name="s_gender" value="female"> أنثى<br/>
<label class="control-label" for="inputSuccess1">رقم التليفون
</label>
<input required type="text" name="s_phone" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your phone">
<label class="control-label" for="inputSuccess1">الايميل
</label>
<input required type="text" name="s_email" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your email">
<label class="control-label" for="inputSuccess1">اسم المستخدم
</label>
<input type="text" name="s_username" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your username">
<label class="control-label" for="inputSuccess1">الرقم السرى
</label>
<input required type="text" name="s_password" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your password">
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
