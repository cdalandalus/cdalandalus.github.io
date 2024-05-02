<?php



	if (isset($_POST["nombre"])) {$nombre = $_POST['nombre'];	}
	else $nombre = "";

	if (isset($_POST["apellidos"])) {$apellidos = $_POST['apellidos'];	}
	else $apellidos = "";

	if (isset($_POST["compania"])) {$compania = $_POST['compania'];	}
	else $compania = "";

	if (isset($_POST["telefono"])) {$telefono = $_POST['telefono'];	}
	else $telefono = "";

	if (isset($_POST["correo"])) {$correo = $_POST['correo'];	}
	else $correo = "";

	if (isset($_POST["contenido"])) {$contenido = $_POST['contenido'];	}
	else $contenido = "";

$error_email = 0; 

//echo ($nombre . $apellidos . $compania . $telefono . $correo . $contenido);

$body = "<strong><u>Registered information / Información registrada</u>:</strong>" .
	    "<br><br>First Name / Nombre: " . $nombre . 
	    "<br>Last Name / Apellidos: " . $apellidos .
	    "<br>University-Company / Institución-Empresa: " . $compania . 
	    "<br>Phone Number / Teléfono: " . $telefono . 
	    "<br>E-mail / Correo Electrónico: " . $correo . 
	    "<br>Content / Contenido: " . $contenido .
        "<br><br>Dear colleague,<br>You will receive an answer about the query made soon.<br>Best regards.<br><br>" .
        "Estimado/a compañero/a,<br>En breve recibirá una respuesta a la consulta realizada.<br>Un cordial saludo.";


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
    $mail->Username   = '31congreso.ingegraf@uma.es';                     //SMTP username   --- expgraing@gmail.com
    $mail->Password   = 'ingegraf_Malaga31';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption 
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             //Enable implicit TLS encryption
	//$mail->SMTPSecure = 'tls';
    $mail->Port       = 587;                                    //465 TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('31congreso.ingegraf@uma.es', '31-Congreso Ingegraf');
	$mail->addAddress($correo, '31-Congreso Ingegraf');               //Name is optional
	
    //$mail->addBCC('31congreso.ingegraf@uma.es', 'Solicitud 31 Congreso Ingegraf - Málaga 2022');               //Name is optional
	$mail->addBCC('josem@uma.es', 'Captura Comité - Málaga 2022');
	$mail->addBCC('exprouma@gmail.com', 'Captura Comité - Málaga 2022');	
	

	

	
	//$mail->addAddress('mdmarin@uma.es', 'Formulario Congreso');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Consultation received – 31st INGEGRAF International Conference';
    $mail->Body    = $body;
	$mail->CharSet ='UTF-8';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

	
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	$error_email = 1;
}



if($error_email == 0){
	
	
		echo '<script>
			alert("The message was sent successfully. Shortly, a confirmation email will be received. \n \n El mensaje se envió correctamente, en breve recibirá un correo-e de confirmación.")
			window.location.replace("https://31congreso.ingegraf.uma.es/");
			</script>';		
	}	




if($error_email == 1){
	
	
		echo '<script>
			alert("Disculpe las molestias, se ha producido un error inesperado en el envio de su solicitud.")
			</script>';		
	}	





?>