<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'digitalchetan85@gmail.com';                     // SMTP username
    $mail->Password   = 'onohdmoxmqtwsltp';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('digitalchetan85@gmail.com', 'DC');
    $mail->addAddress('chetankumar.nv@gmail.com', 'Chetan Kumar N');     // Add a recipient
    $mail->addAddress('dhruvadevelopers@gmail.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Enquiry Details Brochure Download';
        $mail->Body    = '<html><body>';
        $mail->Body   .= '<table rules="all" style="border-style: solid; border-color: #666;" cellpadding="10">';
        $mail->Body   .= "<tr style='background: #eee;'><td><strong>Online Enquery:</strong> </td><td>" . 'Brochure Download' . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['mob-form-name']) . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['mob-form-email']) . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['mob-form-phone']) . "</td></tr>";
        $mail->Body   .= "</table>";
        $mail->Body   .= "</body></html>";

    $mail->send();
    echo "<p class='text-center text-white'><strong>Thanks for contacting us. We will reach you soon.</strong></p>";
    echo "<script type=\"text/javascript\">
            window.open('files/coral-e-brochure.pdf', '_blank')
        </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}