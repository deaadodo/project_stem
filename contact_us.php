<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>اتصل بنا</title>
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/css/styles.css" rel="stylesheet">
 <style>
 form{padding:50px;}
 span{font-size:24px; color:#06C;
 
  }
  address{
  margin-top:5px;}
  p{font-size:30px;
    color:#606;}
header.about_us{
background-image:url(img/img/he.jpg);
border-radius:70px;}
header.about_us h1 {
    font: normal normal 200 50px/150px 'Fira Sans', sans-serif;
    text-align: center;
    margin-top: 50px;
    color: #fff;-->
}
header.about_us h1 span {
    position: relative; 
    top: -15px;
}



}
 </style>
    </head>
    <body>
  
   <?php
 include"nav_part.php";
?>
      
      <section id="contact" >
		<div class="row">
			
                            <header class="about_us" >

                    <h1 class="text-center">...</span> اتصل بنا...<span></h1>
				</header>
		
			
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
						<p></p>
					</address>
				</div>
			</div>
	</section>  
	  <?php
 include"footer.php";
?>
  	  
     <script src="js/bootstrap.min.js"></script>
      
    </body>
  </html>