<?php 

require 'edit.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function LocalMail($body, $Mailsubject="")
{	
	global $local_mail_reciver;
	
	$headers="From: ".$local_mail_reciver." <".$local_mail_reciver.">" . "\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
	@mail($local_mail_reciver,$Mailsubject,$body,$headers);
}



function PhpmailerMail($body, $Mailsubject="")
{
	global 	$phpmailer_mail_sender,$phpmailer_mail_sender_paasword,$mailHost,$phpmailer_mail_reciver;
	//Load Composer's autoloader
	require 'vendor/autoload.php';
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = $mailHost;                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = $phpmailer_mail_sender;                     //SMTP username
	    $mail->Password   = $phpmailer_mail_sender_paasword;                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	    //Recipients
	    $mail->setFrom($phpmailer_mail_sender, 'Akash lord');
	    $mail->addAddress($phpmailer_mail_reciver);     //Add a recipient
	    // $mail->addAddress('ellen@example.com');               //Name is optional
	    // $mail->addReplyTo('info@example.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    //Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = $Mailsubject;
	    $mail->Body    = $body;
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    // echo 'Message has been sent';
	} catch (Exception $e) {
	    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

}

 ?>