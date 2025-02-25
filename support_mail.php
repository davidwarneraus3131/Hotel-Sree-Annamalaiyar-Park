<?php
session_start();
include("./database/db.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST["comments"], ENT_QUOTES, 'UTF-8');

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email format."]);
        exit;
    }

    // ✅ Send email using PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'potterharry623017@gmail.com';  
        $mail->Password = 'tdat jrtw ngkz rjvm';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('potterharry623017@gmail.com', 'Contact Form');
        $mail->addAddress('potterharry623016@gmail.com', 'Hotel Manager'); 
        
        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";
        
        // ✅ Fixed HTML Email Body
        $mail->Body = "
            <div style='max-width: 600px; margin: auto; font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>
                <div style='background-color: #007bff; padding: 15px; color: #ffffff; text-align: center; font-size: 22px; font-weight: bold; border-radius: 10px 10px 0 0;'>
                    📩 New Contact Form Submission
                </div>
                <div style='padding: 20px; background-color: #ffffff; border-radius: 0 0 10px 10px;'>
                    <p style='font-size: 18px; font-weight: bold;'>Hello Admin,</p>
                    <p>You have received a new booking request.</p>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 10px; border-bottom: 1px solid #ddd; font-weight: bold;'>Name:</td>
                            <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$name</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; border-bottom: 1px solid #ddd; font-weight: bold;'>Email:</td>
                            <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$email</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px; font-weight: bold;'>Message:</td>
                            <td style='padding: 10px;'>$message</td>
                        </tr>
                    </table>
                    
                </div>
                <p style='text-align: center; font-size: 14px; color: #888;'>&copy; 2025 Sree Annamalayar Park All Rights Reserved.</p>
            </div>
        ";

      // Send email
      $mail->send();
      echo json_encode(["success" => true, "message" => "Message sent successfully!"]);
  } catch (Exception $e) {
      echo json_encode(["success" => false, "message" => "Mailer Error: " . $mail->ErrorInfo]);
  }


}
?>
