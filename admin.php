  <meta name="facebook-domain-verification" content="5s2sz6zidizrjz18clcvivctxa4i71" />
<meta property="og:title" content="SOBDAR | Whatsapp API">
<meta property="og:description" content="Unoffical Whatsapp API from Sobdar Information Firm. This API can be used to connect Whatsapp Bot, Web Hooks, E-commerce, Management, or for the marketing purposes"><meta property="og:image" content="http://sobdar.com/assets/images/s.jpg">
<meta property="og:image" content="http://sobdar.com/assets/images/s.jpg" />
<meta property="og:image:secure_url" content="https://sobdar.com/assets/images/s.jpg" /> 
<meta property="og:url" content="https://wa.sobdar.com/">
<meta property="og:site_name" content="SOBDAR | crowfunding demo">
<meta property="og:video" content="#">
<meta property="fb:admins" content="10217519215157586">
<meta property="fb:app_id" content="2608171679211510">
<meta property="og:type" content="website">
<title>SOBDAR | Whatsapp API</title>

    <!-- Required Meta Tags -->
    <meta charset="utf-8">

 <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Unoffical Whatsapp API from Sobdar Information Firm. This API can be used to connect Whatsapp Bot, Web Hooks, E-commerce, Management, or for the marketing purposes">
    <meta name="keywords" content="Whatsapp Api, Unoffical API, Unoffical, Whatsapp BOt, Whatsapp Management, Whatsapp Marketing, Whatsapp E-commerce, Whatsapp Web hooks, sobdar,supreen,suprin,suprin aziz,supreen talpur, web design, creative web, website, web developer, developer, designer, website maker, website creater, best website, best website developer, designing, coding, vb6, visual basic, wordpress, wordpress developer, joomla, joomla developer, id card creator, business card developer, graphic design, free lancer, professional web designer,Discord bot, Whatsapp bot, custom bot, messenger bot, twitter bot, custom bot, wordpress, joomla, website, AI, Machine learning, Deep learning, FAQ BOTS, Whatsapp API, API, Custom API, SObdar.com, sobdar it company, sobdar it, sobdar information technology, information technology, information technology company">
    <meta name="author" content="Suprin Aziz">
    
  




<!-- COMMON TAGS -->
<meta charset="utf-8">

<!-- Search Engine -->
<meta name="image" content="https://sobdar.com/assets/images/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="name" content="SOBDAR | Whatsapp API">
<meta itemprop="description" content="Unoffical Whatsapp API from Sobdar Information Firm. This API can be used to connect Whatsapp Bot, Web Hooks, E-commerce, Management, or for the marketing purposes">
<meta itemprop="image" content="https://sobdar.com/assets/images/logo.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->




<?

//THIS ADMIN SYSTEM IS DESIGNED BY SUPRIN AZIZ TALPUR
//YOU CAN FREELY USE IT AND MODIFY IT, BUT PLEASE MENTION ME IN YOUR CREDIT

session_start();
//theusername and password 

//Fuction


function test_input($data) {
	$isequal = "=";
$oneone = "1=1";
$quote ='"';
	
if ($data==$isequal or $data==$oneone or $data=="105" or $data==$quote) {
$data="";
}
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




//Validation 

$sessionadmin = test_input($_SESSION["admin@"]); 
$sessionpass = test_input($_SESSION["pass@"]);



//Checking whether it is there or not
//accessing the database and value from auth.php and db.php
 
include 'auth.php';




//code continued  



if ($allowauthencity==1){
	
	echo '
	
	<script>
	window.location.href = "index.php";
	</script>
	
	
	';
	
	
}	else {
	
	

echo '


<html>  

<head>

	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->

<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon" sizes="57x57" href="Images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="Images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="Images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="Images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="Images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="Images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="Images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="Images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="Images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="Images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="Images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="Images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="Images/favicon-16x16.png">
<link rel="manifest" href="Images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="Images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
body {

  background-image: url("Images/1515114578.jpg");
    background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
background-color: #ffffff;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;

}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
.panel {
	display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-top: auto;
	width: 80%;
	
}
</style>
<body>
        <title>Admin Panel</title>  

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('."login/images/bg-01.jpg".');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="captcha_form" form method="post">
					<span class="login100-form-logo">
					<img src="logo.gif" alt="Admin Panel" class="center" width="100" height="100">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter Username">
						<input class="input100" type="text" name="admin_name" id="admin_name" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					
					<center> <div class="g-recaptcha" data-sitekey= "';
	   echo $sitekey;
	   
	   echo '"></div>
	   <center>
	   <br>
	   <style>
	   .text-danger {
    background-color: white;
	   }
	   </style>
	   <br>
	    <p><span id="admin_name_error" class="text-danger"></span></p>
	   <p><span id="password_error" class="text-danger"></span></p>
	   <p><span id="captcha_error" class="text-danger"></span></p>
	   <br>
	   </center>
    
					<div class="container-login100-form-btn">
					
					
						<button class="login100-form-btn" name="register" id="register" >
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>';


echo "
<script>
$(document).ready(function(){

 $('#captcha_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({ " ;
echo '   url:"process_data.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function()
   {';
echo "    $('#register').attr('disabled','disabled');
   },
   success:function(data)
   {
    $('#register').attr('disabled', false);
    if(data.success)
    {
     $('#captcha_form')[0].reset();
    
     $('#password_error').text('');

     $('#captcha_error').text('');
	 $('#invalid_error').text('');
	 
     grecaptcha.reset();
     alert('Login Sucessfull');
	 window.location.href = 'index.php';
    }
    else
    {
    
     $('#password_error').text(data.password_error);
	  $('#password_error').text(data.invalid_error);


	 
     $('#captcha_error').text(data.captcha_error);
    }
   }
  })
 });

});
</script> ";
}
echo "
<script>
$(document).ready(function(){

 $('#captcha_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:";
   
   
echo '   "process_data.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function()
   {
    $(';
echo "	'#register').attr('disabled','disabled');
   },
   success:function(data)
   {
    $('#register').attr('disabled', false);
    if(data.success)
    {
     $('#captcha_form')[0].reset();
     $('#admin_name_error').text('');

     $('#password_error').text('');

     $('#captcha_error').text('');
	 $('#invalid_error').text('');
	 
     grecaptcha.reset();
     alert('Login Sucessfull');";
	 
echo '	 window.location.href = "";';
echo"
    }
    else
    {
     $('#admin_name_error').text(data.admin_name_error);

     $('#password_error').text(data.password_error);
	
     $('#captcha_error').text(data.captcha_error);
	 $('#invalid_error').text(data.invalid_error);
	
    }
   }
  })
 });

});
</script>";


?>