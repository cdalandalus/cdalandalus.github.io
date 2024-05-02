<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
header("Content-Type: text/html;charset=utf-8");	
//$hoy = getdate();
//$hoy = localtime();
	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	
	if (isset($_POST["nombre"])){
		$nombre = $_POST['nombre'];
	}
	else $nombre = "";

	
	if (isset($_POST["apellidos"])){
		$apellidos = $_POST['apellidos'];
	}
	else $apellidos = "";	

	
	if (isset($_POST["compania"])){
		$compania = $_POST['compania'];
	}
	else $compania = "";		


	if (isset($_POST["telefono"])){
		$telefono = $_POST['telefono'];
	}
	else $telefono = "";
	
	if (isset($_POST["correo"])){
		$correo = $_POST['correo'];
	}
	else $correo = "";	
	
	if (isset($_POST["titulo"])){
		$titulo = $_POST['titulo'];
	}
	else $titulo = "";	
	
	if (isset($_POST["autor"])){
		$autor = $_POST['autor'];
	}
	else $autor = "";	
	
	if (isset($_POST["keywords"])){
		$keywords = $_POST['keywords'];
	}
	else $keywords = "";
	
	
	if (isset($_POST["topics"])){
		$topics = $_POST['topics'];
	}
	else $topics = "";	
	
	
	if (isset($_POST["provincia"])){
		$provincia = $_POST['provincia'];
	}
	else $provincia = "";	
	
	if (isset($_POST["contenido"])){
		$contenido = $_POST['contenido'];
	}
	else $contenido = "";	
	
		

	
	if($topics=="1") $topics="1.- Diseño y desarrollo de producto / Product Design and Development";
	if($topics=="2") $topics="2.- Fabricación y diseño de procesos industriales / Industrial Processes Design and Manufacturing";
	if($topics=="3") $topics="3.- Ingeniería gráfica aplicada / Applied Graphic Enginering";
	if($topics=="4") $topics="4.- Diseño asistido por ordenador / Computer Aided Design";
	if($topics=="5") $topics="5.- Educación y técnicas de representación / Education and Representation Techniques";
	if($topics=="6") $topics="6.- Misceláneas / Miscellany";

	
//Si se quiere generar una contraseña
//if (isset($_POST['generar'])) {
   //Carácteres para la contraseña
   $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
   $password = "";
   //Reconstruimos la contraseña segun la longitud que se quiera
   for($i=0;$i<6;$i++) {
      //obtenemos un caracter aleatorio escogido de la cadena de caracteres
      $password .= substr($str,rand(0,62),1);
   }
   //Mostramos la contraseña generada
   //echo 'Password generado: '.$password;
//}
	
	
	
	
	
	
	
	
/*	
// Depurar:
echo ("Solo para Depurar:<br>");
echo $nombre."<br/>";
echo $apellidos."<br/>";
	echo $compania."<br/>";
	echo $telefono."<br/>";
	echo $correo."<br/>";
	echo $autor."<br/>";
	echo $keywords."<br/>";
	echo $topics."<br/>";
	echo $provincia."<br/>";

*/	
//if($topics != 0 && $provincia != "-"){
	
$error_fileUpload = 0; // 0=ok ; 1 = fichero pesado; 2=  extension inadecuada
$error_email = 0;
$error_sql = 0;

	
	
//  ******************* Subida de Ficheros************************
	
	
	//$uploadOk = 0; Error
	
$target_dir = "uploads/";
$target_file_a = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file_a,PATHINFO_EXTENSION));
$file_name = $_FILES["fileToUpload"]["name"];
$new_file_name = $password . "_" . $file_name;	
$target_file = $target_dir . $password . "_" . basename($_FILES["fileToUpload"]["name"]);	

	

	
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
//  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//  if($check !== false) {
 //   echo "File is an image - " . $check["mime"] . ".";
//    $uploadOk = 1;
//  } else {
 //   echo "File is not an image.";
//    $uploadOk = 0;
//  }
//}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

 //Check file size
if ($_FILES["fileToUpload"]["size"] > 6000000) {		// if ($_FILES["fileToUpload"]["size"] > 500000) {
//  echo "Sorry, your file is too large. / Disculpe, su fichero es demasiado pesado";
  $uploadOk = 0;
	$error_fileUpload = 1; //Error fichero demasiado Pesado
}

// Allow certain file formats
	
if($imageFileType != "doc" && $imageFileType != "docx") {
//  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    $error_fileUpload = 2;
}

	
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 // echo "Sorry, your file was not uploaded.";
	//$error_fileUpload = 1;
	
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	 $error_fileUpload = 0;

  }	  
	
 else {
    //echo "Sorry, there was an error uploading your file.";
	  //$error_fileUpload = 1;
  }
}
	


	
	
	
/*	
	
//  ******************* TELEGRAM bot: Degdp************************
function telegram($msg) {
        global $telegrambot,$telegramchatid;
        $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
        $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
        $context=stream_context_create($options);
        $result=file_get_contents($url,false,$context);
        return $result;
}

// Set your Bot ID and Chat ID. - Irene
//$telegrambot='2111242798:AAHt4y80XjSUHpv94x3Pi_ReD2ntBMMvRoI';
//$telegramchatid=2124133035;

	$telegrambot='857746495:AAEgjpJbzBFkeETwE0YdZRW5J0vLumcmPxY';
    $telegramchatid='684167362';	
	
// Function call with your own text or variable
telegram ("Nueva Solicitud de Ponencia recibida");
	
*/		
	
	
	
	
	//  ******************* SQL ************************

	
if ($error_fileUpload == 0){
	

$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "nueva_inge_2534";



$conn = new mysqli($servername, $username, $password_db, $dbname);	// Abre base de datos
if ($conn->connect_error) {																
  die("Connection failed: " . $conn->connect_error);
	$error_sql = 1;
}
	
	
$consulta_insertar_datos = "INSERT INTO tb_ponencias (Nombre, Apellidos, Empresa, Telefono, Email, Titulo, Autores, KeyWords, Topics, Sub_Topics, File, New_File, Password)
VALUES ('$nombre', '$apellidos', '$compania','$telefono', '$correo', '$titulo','$autor', '$keywords', '$topics','$provincia', '$file_name', '$new_file_name', '$password')";	
	
if($error_fileUpload == 0 && $error_email == 0){
	if (mysqli_query($conn, $consulta_insertar_datos)) {
   //  echo "El nuevo datos se ha insertado";
}
	
	else{
   // echo "ERROR: Problemas al insertar los datos. " . mysqli_error($conn);
		$error_sql = 1;
}
	
}	
	
mysqli_close($conn);
}
	
	//  ******************* EMAIL************************

	
	
if($error_fileUpload == 0 && $error_sql == 0){	
	
	
	
	
$body ="<h2><strong><u>Abstract submitted – 31st INGEGRAF International Conference<br>  

Resumen enviado – 31 Congreso Internacional INGEGRAF 2022 </u></strong></h2><br><br>".
	
	
	
	"<strong>Registered information / Información registrada:</strong><br>".
	"<br><strong>First Name / Nombre:</strong> " . $nombre . 
	"<br><strong>Last Name / Apellidos:</strong> " . $apellidos . 
	"<br><strong>University-Company / Institución-Empresa:</strong> " . $compania . 
	"<br><strong>Phone Number / Teléfono:</strong> " . $telefono . 
	"<br><strong>E-mail / Correo Electrónico:</strong> " . $correo.
	"<br><strong>Title / Título:</strong> " . $titulo.
	"<br><strong>Authors:  / Autores:</strong> " . $autor.
	"<br><strong>Keywords / Palabras clave:</strong> " . $keywords.
	"<br><strong>Topic / Tema:</strong> " . $topics.
	"<br><strong>Sub-Topic / Sub-tema:</strong>  " . $provincia.
	"<br><strong>Filename / Nombre del fichero:</strong> " .$file_name.
	"<br><strong>Password / Contraseña:</strong> " . $password .
	"<br><br> If you need to inquire about the information sent, please access the following link, https://31congreso.ingegraf.uma.es/form-verificar-abstract.php. You must login with the email used and the password sent in this confirmation email. <br><br>Si necesita hacer una consulta de la información enviada, le ruego acceda al siguiente enlace, https://31congreso.ingegraf.uma.es/form-verificar-abstract.php. Deberá identificarse con el correo-e utilizado y la contraseña remitida en este correo-e de confirmación." .
	"<br><br>For any question contact the organizing committee sending an email to 31congreso.ingegraf@uma.es <br>Para cualquier consulta, puede contactar con el comité organizador enviando un correo-e a 31congreso.ingegraf@uma.es <br><br>Thanks for your participation. Kind regards.<br>Gracias por su participación. Un cordial saludo. <br><br>Organizing Committee / Comité Organizador <br> 31st INGEGRAF International Conference / 31 Congreso Internacional INGEGRAF <br><br>31congreso.ingegraf.uma.es<br>31congreso.ingegraf@uma.es";
	
/*  
<br><a href="http://31congreso.ingegraf.uma.es">31congreso.ingegraf.uma.es</a> <br>
<br><img src="image/envelope.svg" alt="Bootstrap" width="20px">
<a href="mailto:31congreso.ingegraf@uma.es">31congreso.ingegraf@uma.es</a>";
*/
	
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
    //$mail->Username   = 'josem@uma.es';                     //SMTP username   --- expgraing@gmail.com
	$mail->Username   = '31congreso.ingegraf@uma.es';                     //SMTP username   --- expgraing@gmail.com
    $mail->Password   = 'ingegraf_Malaga31';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption 
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             //Enable implicit TLS encryption
	//$mail->SMTPSecure = 'tls';
    $mail->Port       = 587;                                    //465 TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
	
    $mail->setFrom('31congreso.ingegraf@uma.es', '31 Congreso Ingegraf');
    $mail->addAddress($correo, 'Respuesta 31 Congreso Ingegraf - Málaga 2022');     //Add a recipient
	
    $mail->addBCC('31congreso.ingegraf@uma.es', 'Solicitud 31 Congreso Ingegraf - Málaga 2022');               //Name is optional
	$mail->addBCC('josem@uma.es', 'Captura Comité - Málaga 2022');
	$mail->addBCC('exprouma@gmail.com', 'Captura Comité - Málaga 2022');	
	
	
	//$mail->addAddress('mdmarin@uma.es', 'Formulario Congreso');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    //$mail->addAttachment($target_file);    //Optional name
    
	if (file_exists($target_file)) {
			$mail->addAttachment($target_file);    //Optional name
	}
	
	
	//Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Abstract submitted – 31st INGEGRAF International Conference';
    $mail->Body    = $body;
	$mail->CharSet ='UTF-8';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($error_fileUpload == 0){
	$mail->send();
	}

	
} catch (Exception $e) {
    //echo "Disculpe las molestias. El mesaje no se puedo enviar: {$mail->ErrorInfo}";
	$error_email = 1;
}
}		//Fin del IF de Errores
	//  ******************* FIN EMAIL************************

		
	
	
	
	
	
	
	
// ***************** Gestión de errores   *******************************


 	
	
	
if($error_fileUpload == 2){		// Error de Tipo de Fichero
		
	echo '<script>
			alert("Sorry for the inconvenience but only .doc or .docx files are supported.\n \n Disculpe las molestias, pero solo se admiten ficheros .doc o .docx.")
			window.history.go(-1);
			</script>';		
	}	
	
	
	
	
	
	
if($error_fileUpload == 1){	// Error de carga de  Fichero
		
	echo '<script>
			alert("Sorry for the inconvenience but the maximum file size allowed has been exceeded.\n \n Disculpe las molestias, pero se ha excedido el tamaño máximo de fichero permitido.")
			window.history.go(-2);
			</script>';		
	}
	


if($error_email == 1){	// Error en el envio de correo electronico
		
	echo '<script>
			alert("Disculpe las molestias, Se ha producido un error inesperado en el envio del correo electrónico.")
			window.history.go(-2);
			</script>';		
	}	
	
if($error_sql == 1){	// Error de carga de los datos en la base de datos
		
	echo '<script>
			alert("Disculpe las molestias, Se ha producido un error inesperado en la carga de sus datos, en nuestra base de datos.")
			window.history.go(-2);
			</script>';		
	}	
	
if($error_sql == 0 &&  $error_email == 0 && $error_fileUpload == 0){	// SIN Error 
	echo '<script>
			alert("The message was sent successfully. Shortly, a confirmation email will be received.  \n \n El mensaje se envió correctamente, en breve recibirá un correo-e de confirmación. ")
			window.location.replace("https://31congreso.ingegraf.uma.es/");
			</script>';	
	}		
	

	
	

	
	
	
	

	
//	header('location: ../index.php');
	
//$consulta_insertar_datos ->close();	

	
?>
	

	
</body>
</html>