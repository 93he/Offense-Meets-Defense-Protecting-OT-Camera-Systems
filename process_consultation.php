<?php include('header.php'); ?>
<?php
// process_consultation.php

// Set encoding for English
header('Content-Type: text/html; charset=utf-8');

// Check if form was submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect data from form
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $jobTitle = htmlspecialchars($_POST['jobTitle']);
    $projectType = htmlspecialchars($_POST['projectType']);
    $projectStage = htmlspecialchars($_POST['projectStage']);
    $projectDescription = htmlspecialchars($_POST['projectDescription']);
    $preferredDay = htmlspecialchars($_POST['preferredDay']);
    $preferredTime = htmlspecialchars($_POST['preferredTime']);
    
    // Validate essential data
    if (empty($fullName) || empty($email) || empty($phone)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields']);
        exit;
    }
    
    // Registration date and time
    $timestamp = date('Y-m-d H:i:s');
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    
    // Initialize data for logging
    $visitorData = [
        'timestamp' => $timestamp,
        'ip' => $ipAddress,
        'name' => $fullName,
        'email' => $email,
        'phone' => $phone,
        'company' => $company,
        'jobTitle' => $jobTitle,
        'projectType' => $projectType,
        'projectStage' => $projectStage,
        'preferredDay' => $preferredDay,
        'preferredTime' => $preferredTime
    ];
    
    // Log data to visitors.txt file
    $logEntry = json_encode($visitorData, JSON_UNESCAPED_UNICODE) . PHP_EOL;
    
    // Write data to file
    $file = fopen('visitors.txt', 'a');
    if ($file) {
        fwrite($file, $logEntry);
        fclose($file);
        
        // Send confirmation email (optional)
        sendConfirmationEmail($fullName, $email);
        
        // Return success response
        echo json_encode([
            'success' => true, 
            'message' => 'Thank you ' . $fullName . ', your request has been received successfully!',
            'data' => $visitorData
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error occurred while saving data']);
    }
    
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// Function to send confirmation email
function sendConfirmationEmail($name, $email) {
    $to = $email;
    $subject = "Free Consultation Session Confirmation - Advanced Software Company";
    
    $message = "
    <html dir='ltr'>
    <head>
        <title>Booking Confirmation</title>
        <meta charset='utf-8'>
    </head>
    <body style='font-family: Arial, sans-serif;'>
        <div style='max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;'>
            <h2 style='color: #2c3e50; text-align: center;'>Advanced Software Company</h2>
            <h3 style='color: #1abc9c;'>Free Consultation Session Confirmation</h3>
            
            <p>Dear <strong>$name</strong>,</p>
            
            <p>Thank you for booking a free consultation session with us. Your request has been received successfully and we will contact you within 24 hours to confirm the final appointment.</p>
            
            <div style='background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin: 20px 0;'>
                <h4 style='color: #2c3e50;'>Your Booking Details:</h4>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Session Duration:</strong> 30 minutes</p>
                <p><strong>Session Method:</strong> Online (we will send you the session link)</p>
            </div>
            
            <p>If you have any questions, feel free to contact us at:</p>
            <p>📞 Phone: +966 11 123 4567</p>
            <p>📧 Email: info@software-advanced.com</p>
            
            <hr style='border: none; border-top: 1px solid #eee; margin: 20px 0;'>
            
            <p style='font-size: 12px; color: #777; text-align: center;'>
                This email was sent automatically, please do not reply.<br>
                © 2023 Advanced Software Company. All rights reserved.
            </p>
        </div>
    </body>
    </html>
    ";
    
    // Email settings
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Advanced Software Company <noreply@software-advanced.com>" . "\r\n";
    
    // Send email (if server supports sendmail)
    // @mail($to, $subject, $message, $headers);
}

// Function to read all visitors from file
function getAllVisitors() {
    $visitors = [];
    if (file_exists('visitors.txt')) {
        $lines = file('visitors.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $visitor = json_decode($line, true);
            if ($visitor) {
                $visitors[] = $visitor;
            }
        }
    }
    return $visitors;
}

// Function to read last 10 visitors
function getRecentVisitors($limit = 10) {
    $allVisitors = getAllVisitors();
    return array_slice($allVisitors, -$limit);
}
?>