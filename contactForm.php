<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['contactBtn'])){
    //Contact Form Values
    $senderName = $_POST['user_name'];
    $senderEmail = $_POST['email'];
    $senderMessage = $_POST['message'];
    //  = "This is the body <b>HTML FORMAT</b>";
    
    
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtpout.secureserver.net';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'contact@paulooidesign.ca';                 // SMTP username
        $mail->Password = 'info1234';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        
        //Recipients
        $mail->setFrom($senderEmail, $senderName);
        $mail->addAddress('contact@paulooidesign.ca', 'Paul Ooi Development');     // Add a recipient
        
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact from Portfolio Site';
        $mail->Body    = $senderMessage;
        
        $mail->send();

        //SEND BACK A CONFIRMATION MESSAGE TO USER THROUGH POST
        // echo 'Message has been sent';
        header("Location: index.php?&feedback='message sent'#feedback");
    } catch (Exception $e) {
        //SEND BACK A FEEDBACK MESSAGE TO USER THROUGH POST
        header("Location: index.php?&feedback='Error sending message: " . $mail->ErrorInfo . ". Please try again.'#feedback");
        // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
    
    
}//END IF POST SET
    ?>