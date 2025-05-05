<?php

include "req.php";
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Create a unique directory for each form submission
    $id = time(); // Using a timestamp as a unique identifier for the folder
    $storeFolder = "../media/" . $id . "/";

    if (!is_dir($storeFolder)) {
        if (!mkdir($storeFolder, 0755, true)) {
            die(json_encode(['alert' => 'error', 'message' => 'Failed to create upload directory.']));
        }
    }

    // Define file extensions allowed
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
    $fileUrls = []; // Store URLs of uploaded files

    // Handle each file upload and validate the extension
    $fileFields = [
        'resume' => "Resume"
    ];

    foreach ($fileFields as $field => $label) {
        if (isset($_FILES[$field]) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
            $extension = strtolower(pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION));
            if (in_array($extension, $allowedExtensions)) {
                // Create a unique filename with a random number and date
                $uniqueFileName = $field . '_' . mt_rand(10000, 99999) . date("d") . date("m") . date("Y") . '.' . $extension;
                $filePath = $storeFolder . $uniqueFileName;

                // Move the file and store the URL if successful
                if (move_uploaded_file($_FILES[$field]['tmp_name'], $filePath)) {
                    $fileUrls[$label] = "../media/$id/" . $uniqueFileName;
                } else {
                    die(json_encode(['alert' => 'error', 'message' => "Failed to move $label."]));
                }
            } else {
                die(json_encode(['alert' => 'error', 'message' => "Invalid file extension for $label."]));
            }
        }
    }

    // Continue with PHPMailer configuration to send email
    $mail = "++ -------======------ Resume Submission Details -------======------ ++\n\n"; 
    // Append file URLs to the email body
    if (!empty($fileUrls)) {
        $mail .= "++++++++++++++++++++++++++++++++++++++++\n";
        $mail .= "++ ------------ Uploaded Files  ------------ ++\n";
        $mail .= "++++++++++++++++++++++++++++++++++++++++";
        foreach ($fileUrls as $label => $url) {
           $mail .= "\n+ $label: ".getFullFileUrl($url);
        }
    }
	 
	
	$headers = "From:$emailAddress <info@himjobstaffing.com>\r\nX-Mailer: PHP/". phpversion();
	$subj = "Resume Submission";  
    mail($to, $subj, $mail, $headers); 

    $mess =urlencode($mail);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$chatid ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl); 
 
  
    echo json_encode(["alert" => "success", "message" => "Form submitted successfully and email sent."]);
} else {
    echo json_encode(['alert' => 'error', 'message' => 'Bad Request']);
}
