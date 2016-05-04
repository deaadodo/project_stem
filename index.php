<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الرئيسية</title>
    
            <link href="css/css/bootstrap.min.css" rel="stylesheet">
          <link href="css/css/styles.css" rel="stylesheet">
          <link href="css/css/jquery.fancybox.css" rel="stylesheet">
          <link href="css/background.css" rel="stylesheet">
    <style>
 form{padding:50px;}
 span{font-size:24px; color:#06C;
 
  }
  address{
  margin-top:5px;}
  p{font-size:20px;
  color:#606;}
  .r{font-size:38px;
  color:#FFF ;
  }
 </style>
  </head>
    <body>
  <header
   <?php
 include"nav_part.php";
?>
</header>
      <section class="hero" id="hero" style="background-image:url(img/img/d.jpg)">
        <div class="container">
             <div class="col-md-8 col-md-offset-2 text-center">
              <h1 class="">STEM</h1><br />

              <h class="r">طريقــــــــــــــــــــــــك نحو المستقبل</h1>
              
              
         
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-5 text-center">
              <a href="video/STEM.mp4" class="hero-play-btn various fancybox.iframe"><img src="img/img/play-btn.png"></a>
             
            </div>
          </div>
        </div>
        
      </section>
      

      <section class="download-now" >

        <div class="container">
          <div class="row">
            <div class="col-md-6 wp1">
              <h1>
             
            <div class="download-btn">
           
          <center><p>  ------رؤيةSTEM -----</p></center>
             <p>
إعداد جيل من المتفوقين يتولى القيادة على أسس صحيحة من العلم والتكنولوجيا .
معاونة المتفوقين على مواصلة التقدم وتدريبهم على التفكير والبحث العلمى والابتكار.
ربط الشباب المتفوق بالفكر والعمل الوطنى.
الكشف عن ميول واستعدادات المتفوقين وتنميتها.
وسائل المدرسة لتحقيق أهدافها
توفير كافة الظروف التعليمية المبنية على تخطيط علمى سليم.
 تناسب تفوقهم وتنمية مواهبهم.
العناية بألوان النشاط التى تسمح بإشباع ميول الطلاب.
</p>
            </div></h1>
                        
        </div>
        
        
        <div class="col-md-6 wp1">
              <h1>
             
            <div class="download-btn">
                      <center><p>  ------التعليم فى مدارس المتفوقينSTEM -----</p></center>

            <P>
 تعتمد مدارس المتفوقين للعلوم والتكنولوجيا على
الطرق المبتكرة الحديثة في التدريس والتى تقوم على الحوار والمناقشة وتحضير الدرس.
مشاركة الطالب واستخدام ملكاته في التفكير والفهم والاستيعاب والاستنتاج.
استخدام الوسائل التعليمية المعينة والأجهزة التعليمية الحديثة سواء السمعية منها أم البصرية.
استخدام معامل اللغات - معامل العلوم - الكمبيوتر - الفيديو - المسجلات - المجسمات - الرسوم البيانية - الخرائط.

</p>
            </div></h1>
                        
        </div>
        
        
    <center>    <img src="img/img/1.jpg"  class="download-btn"/></center>
        
        </div>
        
			<center>	<p>اتصل بنا</p></center>
				
			<div class="row">
				<div class="col-md-8">
					<form class="row" action="insert_contact.php" method="post">
						<div class="form-group col-md-6">
<input type="text" name="c_name" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your name"><br/><br/>
						</div>
						<div class="form-group col-md-6">
<input type="text" name="c_email" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="write your email"><br/><br/>
						</div>
						
						<div class="form-group col-md-12">
							<textarea name="c_massege" class="form-control" rows="10" placeholder="Message"></textarea>
						</div>
						<div class="form-group col-md-12">
<h1><input class="btn-primary" type="submit" name="submit" value="send" /></h1>
						</div>
					</form>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<address>
						<p>العنوان</p>
						<span>stem</span>
					</address>
					<address>
						<p>الايميل</p>
											<span>https://mail.google.com/mail/</span>

					</address>
					<address>
						<p>رقم التليفون</p>
						<span>01155185204</span>
					</address>
				</div>
			</div>
		</div>
	</section>
	
	  <?php
 include"footer.php";
?>
      
     <script src="js/js/jquery.fancybox.pack.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script>
	  
// fancyBox
$(document).ready(function() {
  $(".various").fancybox({
    maxWidth: 800,
    maxHeight: 450,
    fitToView: false,
    width: '70%',
    height: '70%',
    autoSize: false,
    closeClick: false,
    openEffect: 'none',
    closeEffect: 'none'
  });
});
</script>
    </body>
  </html>