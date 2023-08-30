

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$name = $_POST['username'];
// $phone = $_POST['userphone'];
$email = $_POST['usermail'];


try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   //Enable verbose debug output
    $mail->isSMTP();    //Send using SMTP
    $mail->Host       = 'smtp.ukr.net';     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;  //Enable SMTP authentication
    $mail->Username   = 'thorns@ukr.net';    //SMTP username
    $mail->Password   = 'XnOqR63NDhsP8Oea';   //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
    $mail->Port       = 465;     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('thorns@ukr.net', 'Mailer');
    $mail->addAddress('istvan.mbox@gmail.com', 'Joe User');   //Add a recipient



    //Content
    $mail->isHTML(true);    //Set email format to HTML
    $mail->Subject = 'User data from MountainsCalling';
    $mail->Body    = '' .$name . ' left his email:  <b>' .$email. '</b>';
    $mail->AltBody = '' .$name . ' left his email:  <b>' .$email. '</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>