<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ar">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>nav_part</title>

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />
 <link rel="stylesheet" href="css/css/style2.css"> 
<style>
ul.social-icons > li > a{
	color:#FCF;
	width: 38px;
	height: 38px;
	line-height: 38px;
	border-radius: 100%;
	background:#036;
	text-align: center;
}
#toggle{
  display: block;
  width: 28px;
 margin:0 1300px  ;
 padding-top:30px;
 position: relative;
	right: 15px;
	top: 15px;
	font-size: 30px;
	color:#036;
 
}
#toggle span:after,
#toggle span:before {
  content: "";
  position: absolute;
  left: 0;
  top: -9px;
}
#toggle span:after{
  top: 9px;
}
#toggle span {
  position: relative;
  display: block;
}

#toggle span,
#toggle span:after,
#toggle span:before {
  width: 100%;
  height: 5px;
  background-color: #888;
  transition: all 0.3s;
  border-radius: 2px;
}

/* on activation */
#toggle.on span {position:  relative;
	
	
  background-color: transparent;
}
#toggle.on span:before {
  transform: rotate(45deg) translate(5px, 5px);
}
#toggle.on span:after {
  transform: rotate(-45deg) translate(7px, -8px);

}
#toggle.on + #menu {
  opacity: 1;
  visibility: visible;
   margin:20px 1200px  ;
   padding:10px;
  font-size:25px;
  	margin: 0 1400px;

}

#menu {
	  width: 200px;
	  background-image:url(img/img/g.jpg);
 
  border-radius: 12px;
	left: -200px;
	text-align: center;
	margin-left:50px;
	 position: fixed;
  color: #999;
  padding: 10px;
  margin: auto;
  text-align: center;
  opacity: 0;
  visibility: hidden;
  transition: opacity .4s;
}



ul, li, li a {
  list-style: none;
  margin: 0;
  padding: 5px;
}
li a {
  padding: 5px;
  color:#036;
  text-decoration: none;
  transition: all .2s;
}
li a:hover,
li a:focus {
  background:#CCC;
  color:#F69;
}
.logo{
	position: absolute;
	left: 5px;
	margin-top:20px;
	margin-left:25px;
}
.lo{	position: absolute;
margin-top:110px;
color:#003;
font-size:32px;
margin-left:20px;}

</style>
</head>
<body>
<header >

<img class="logo" src="img/img/logo.png" alt="" width="300" height="100">
    <p  class="lo"  >	جهز نفسك لـــــــــــــــــــــــــــــــــــــــــــــــــــ</p>
             				
<a href="#menu" id="toggle"><span></span></a>
<div id="menu">

  <ul>
    <li><a href="index.php">الرئيسية</a></li>
    
<li><a href="courses.php">الصفوف الدراسية</a></li>
    <li><a href="aboutus.php">من نحن </a></li> 

        <li><a href="services.php">خدمات اخرى</a></li>

    <li><a href="contact_us.php">اتصل بنا</a></li>
    
<a href="#0" class="cd-popup-trigger">تسجيل الدخول</a>
<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<p>تسجيل الدخول</p>
		<ul class="cd-buttons">
			<li><a href="login_student.php">تسجيل دخول الطلاب</a></li>
			<li><a href="login_admin.php">تسجيل دخول الادمن</a></li>
		</ul>
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div> 
</div>  
<a href="#0" class="cd-popup-trigger">التسجيل</a>

<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<p>التسجيل</p>
		<ul class="cd-buttons">
			<li><a href="form_parents_valid.php">التسجيل للأولياء الأمور</a></li>
			<li><a href="form_student_valid.php">التسجيل للطلاب</a></li>
		</ul>
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div> 
</div> 
</div>
</header>
</body>
<script type="text/javascript" src="js/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/js/bootstrap.js"></script>
  <script src="js/js/vendor/jquery-1.11.1.min.js"></script>
 <script>
var theToggle = document.getElementById('toggle');

function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}
</script>
<script src="js/js/main1.js"></script> 
</html>