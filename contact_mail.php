

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
session_start();
include("./database/db.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

// print_r($_POST); exit;   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $arrival_date = $_POST['arrival_date'];
    $departure_date = $_POST['departure_date'];
    $room_type = $_POST['room_type'];

    // ✅ Insert data into the database
    $sql = "INSERT INTO bookings (name, arrival_date, departure_date, room_type,phone) 
            VALUES ('$name','$arrival_date','$departure_date', '$room_type','$phone')";

    
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "error";
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

        $mail->setFrom('potterharry623017@gmail.com', 'Hotel Booking');
        $mail->addAddress('potterharry623016@gmail.com', 'Hotel Manager'); 
        
        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Room Booking Request";
        
        // Add a professionally designed email body with refined styling
        $mail->Body = "
            <div style='max-width: 650px; margin: auto; padding: 25px; font-family: Arial, sans-serif; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0,0,0,0.1); border: 1px solid #ddd;'>
                
                <!-- Logo & Header -->
                <div style='text-align: center;'>
                    <img src='https://sreeannamalaiyarpark.com/static/api/images/logo-header.png' alt='Hotel Logo' style='width: 120px; margin-bottom: 20px;'>
                </div>
                <div style='background-color: #003366; color: white; text-align: center; padding: 20px; font-size: 22px; font-weight: bold; border-radius: 8px 8px 0 0;'>
                    New Room Booking Request
                </div>
        
                <!-- Booking Details -->
                <div style='padding: 25px; background-color: white; border-radius: 0 0 8px 8px;'>
                    <p style='font-size: 18px; color: #333; font-weight: bold;'>Guest Information</p>
                    <hr style='border: 1px solid #ddd;'>
                    <p style='font-size: 16px; color: #555;'><strong>Name:</strong> $name</p>
                    <p style='font-size: 16px; color: #555;'><strong>Mobile Number:</strong> $phone</p>
                    
                    <p style='font-size: 18px; color: #333; font-weight: bold; margin-top: 20px;'>Booking Details</p>
                    <hr style='border: 1px solid #ddd;'>
                    <p style='font-size: 16px; color: #555;'><strong>Arrival Date:</strong> $arrival_date</p>
                    <p style='font-size: 16px; color: #555;'><strong>Departure Date:</strong> $departure_date</p>
                    <p style='font-size: 16px; color: #555;'><strong>Room Type:</strong> $room_type</p>
                </div>
        
                <!-- Footer -->
                
            </div>
        ";
        
        

        if ($mail->send()) {
            $_SESSION['status'] = 'success';
            $_SESSION['message'] .= ' Email has been sent successfully!';
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] .= ' Failed to send email. Mailer Error: ' . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        $_SESSION['status'] = 'error';
        $_SESSION['message'] .= ' Mailer Error: ' . $mail->ErrorInfo;
    }

    // ✅ Redirect back to a confirmation page
    header('Location: index.php');
    exit();
}
?>
