<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	/*
	            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );     */
	
    //Server settings
    $mail->SMTPDebug = M_PI_4;                      //Enable verbose debug output    SMTP::DEBUG_SERVER
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'correo.uma.es';                     //Set the SMTP server to send through    'smtp.gmail.com';   
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'josem@uma.es';                     //SMTP username   --- expgraing@gmail.com
    $mail->Password   = 'uma235723';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption 
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             //Enable implicit TLS encryption
	//$mail->SMTPSecure = 'tls';
    $mail->Port       = 587;                                    //465 TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('josem@uma.es', 'Mailer');
    $mail->addAddress('arqmac67@gmail.com', 'Jose');     //Add a recipient
    //$mail->addAddress('josem@uma.es');               //Name is optional
	$mail->addAddress('expgraing@gmail.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hola';
    $mail->Body    = 'triunfazo';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}






?>