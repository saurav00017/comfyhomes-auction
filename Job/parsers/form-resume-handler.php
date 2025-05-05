<?php

require '../vendor/autoload.php'; // Autoload PHPMailer with Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

define("BASE_DIR", dirname(__DIR__) . DIRECTORY_SEPARATOR);
define("BASE_URL", "https://himjobstaffing.com/");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Create a unique directory for each form submission
    $id = time(); // Using a timestamp as a unique identifier for the folder
    $storeFolder = BASE_DIR . "media/" . $id . "/";

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
                    $fileUrls[$label] = BASE_URL . "media/$id/" . $uniqueFileName;
                } else {
                    die(json_encode(['alert' => 'error', 'message' => "Failed to move $label."]));
                }
            } else {
                die(json_encode(['alert' => 'error', 'message' => "Invalid file extension for $label."]));
            }
        }
    }

    // Continue with PHPMailer configuration to send email

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host       = 'mail.himjobstaffing.com';        // Specify the SMTP server
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'support@himjobstaffing.com';     // SMTP username
        $mail->Password   = 'himjobstaffing.com';            // SMTP password (replace with the actual password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      // Enable SSL encryption (Port 465 requires SSL)
        $mail->Port       = 465;                              // TCP port to connect to

        // Recipients
        $mail->addAddress('support@himjobstaffing.com', 'Himjob Staffing Support');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Resume Submission';
        $mail->Body = "";

        // Append file URLs to the email body
        if (!empty($fileUrls)) {
            $mail->Body .= "<h3>Uploaded Files</h3><ul>";
            foreach ($fileUrls as $label => $url) {
                $mail->Body .= "<li><strong>$label:</strong> <a href='$url'>$url</a></li>";
            }
            $mail->Body .= "</ul>";
        }

        // Send email
        $mail->send();
        echo json_encode(["alert" => "success", "message" => "Form submitted successfully and email sent."]);
    } catch (Exception $e) {
        echo json_encode(["alert" => "error", "message" => "Failed to send email: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['alert' => 'error', 'message' => 'Bad Request']);
}
