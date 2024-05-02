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
//https://www.associazioneadm.it/jcm2022/expertise.php	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	
$resultado = "";
$n_topics = 0;
	
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


	
	if (isset($_POST["correo"])){
		$correo = $_POST['correo'];
	}
	else $correo = "";		
	
	
	
	
	
	
	if (isset($_POST["t101"])){	$t101 = $_POST['t101'];	}
	else $t101 ="";

	if (isset($_POST["t102"])){	$t102 = $_POST['t102'];	}
	else $t102 ="";
	
	if (isset($_POST["t103"])){	$t103 = $_POST['t103'];	}
	else $t103 ="";
	
	if (isset($_POST["t104"])){	$t104 = $_POST['t104'];	}
	else $t104 ="";
	
	if (isset($_POST["t105"])){	$t105 = $_POST['t105'];	}
	else $t105 ="";

	if (isset($_POST["t106"])){	$t106 = $_POST['t106'];	}
	else $t106 ="";
	
	if (isset($_POST["t107"])){	$t107 = $_POST['t107'];	}
	else $t107 ="";
	
	if (isset($_POST["t108"])){	$t108 = $_POST['t108'];	}
	else $t108 ="";
	
	if (isset($_POST["t109"])){	$t109 = $_POST['t109'];	}
	else $t109 ="";

	if (isset($_POST["t110"])){	$t110 = $_POST['t110'];	}
	else $t110 ="";
	
	if (isset($_POST["t111"])){	$t111 = $_POST['t111'];	}
	else $t111 ="";
	
	if (isset($_POST["t112"])){	$t112 = $_POST['t112'];	}
	else $t112 ="";
	
	if (isset($_POST["t113"])){	$t113 = $_POST['t113'];	}
	else $t113 ="";
	
	
	
	
	if (isset($_POST["t201"])){	$t201 = $_POST['t201'];	}
	else $t201 ="";

	if (isset($_POST["t202"])){	$t202 = $_POST['t202'];	}
	else $t202 ="";
	
	if (isset($_POST["t203"])){	$t203 = $_POST['t203'];	}
	else $t203 ="";
	
	if (isset($_POST["t204"])){	$t204 = $_POST['t204'];	}
	else $t204 ="";
	
	if (isset($_POST["t205"])){	$t205 = $_POST['t205'];	}
	else $t205 ="";

	if (isset($_POST["t206"])){	$t206 = $_POST['t206'];	}
	else $t206 ="";
	
	if (isset($_POST["t207"])){	$t207 = $_POST['t207'];	}
	else $t207 ="";
	
	if (isset($_POST["t208"])){	$t208 = $_POST['t208'];	}
	else $t208 ="";
	
	if (isset($_POST["t209"])){	$t209 = $_POST['t209'];	}
	else $t209 ="";

	if (isset($_POST["t210"])){	$t210 = $_POST['t210'];	}
	else $t210 ="";
	

	
	
	if (isset($_POST["t301"])){	$t301 = $_POST['t301'];	}
	else $t301 ="";

	if (isset($_POST["t302"])){	$t302 = $_POST['t302'];	}
	else $t302 ="";
	
	if (isset($_POST["t303"])){	$t303 = $_POST['t303'];	}
	else $t303 ="";
	
	if (isset($_POST["t304"])){	$t304 = $_POST['t304'];	}
	else $t304 ="";
	
	if (isset($_POST["t305"])){	$t305 = $_POST['t305'];	}
	else $t305 ="";

	if (isset($_POST["t306"])){	$t306 = $_POST['t306'];	}
	else $t306 ="";
	
	
	
	
	
	if (isset($_POST["t401"])){	$t401 = $_POST['t401'];	}
	else $t401 ="";

	if (isset($_POST["t402"])){	$t402 = $_POST['t402'];	}
	else $t402 ="";
	
	if (isset($_POST["t403"])){	$t403 = $_POST['t403'];	}
	else $t403 ="";
	
	if (isset($_POST["t404"])){	$t404 = $_POST['t404'];	}
	else $t404 ="";
	
	if (isset($_POST["t405"])){	$t405 = $_POST['t405'];	}
	else $t405 ="";

	if (isset($_POST["t406"])){	$t406 = $_POST['t406'];	}
	else $t406 ="";
	
	if (isset($_POST["t407"])){	$t407 = $_POST['t407'];	}
	else $t407 ="";
	
	if (isset($_POST["t408"])){	$t408 = $_POST['t408'];	}
	else $t408 ="";
	
	if (isset($_POST["t409"])){	$t409 = $_POST['t409'];	}
	else $t409 ="";


	
	
	
	if (isset($_POST["t501"])){	$t501 = $_POST['t501'];	}
	else $t501 ="";

	if (isset($_POST["t502"])){	$t502 = $_POST['t502'];	}
	else $t502 ="";
	
	if (isset($_POST["t503"])){	$t503 = $_POST['t503'];	}
	else $t503 ="";
	
	if (isset($_POST["t504"])){	$t504 = $_POST['t504'];	}
	else $t504 ="";
	
	if (isset($_POST["t505"])){	$t505 = $_POST['t505'];	}
	else $t505 ="";

	if (isset($_POST["t506"])){	$t506 = $_POST['t506'];	}
	else $t506 ="";
	
	if (isset($_POST["t507"])){	$t507 = $_POST['t507'];	}
	else $t507 ="";
	
	if (isset($_POST["t508"])){	$t508 = $_POST['t508'];	}
	else $t508 ="";	
	
	
	
	if (isset($_POST["t601"])){	$t601 = $_POST['t601'];	}
	else $t601 ="";

	if (isset($_POST["t602"])){	$t602 = $_POST['t602'];	}
	else $t602 ="";
	
	if (isset($_POST["t603"])){	$t603 = $_POST['t603'];	}
	else $t603 ="";
	
	if (isset($_POST["t604"])){	$t604 = $_POST['t604'];	}
	else $t604 ="";
	
	if (isset($_POST["t605"])){	$t605 = $_POST['t605'];	}
	else $t605 ="";

	if (isset($_POST["t606"])){	$t606 = $_POST['t606'];	}
	else $t606 ="";
	
	if (isset($_POST["t607"])){	$t607 = $_POST['t607'];	}
	else $t607 ="";	
	
	

	if($t101 == "Yes/Si") {$resultado= $resultado . "1.1- Integrated Product and Process Design / Diseño integrado de productos y procesos<br>"; $n_topics=1;}
	if($t102 == "Yes/Si") {$resultado= $resultado . "1.2- Interactive Design / Diseño interactivo<br>";$n_topics=$n_topics+1;}
    if($t103 == "Yes/Si") {$resultado= $resultado . "1.3- Innovative Design Methods / Métodos de diseño innovadores<br>";$n_topics=$n_topics+1;}
	if($t104 == "Yes/Si") {$resultado= $resultado . "1.4- Knowledge-based Engineering / Ingeniería basada en el conocimiento<br>";$n_topics=$n_topics+1;}
	if($t105 == "Yes/Si") {$resultado= $resultado . "1.5- Industrial Design / Diseño industrial<br>";$n_topics=$n_topics+1;}
	if($t106 == "Yes/Si") {$resultado= $resultado . "1.6- Human factors and Ergonomy / Ergonomía y factores humanos<br>";$n_topics=$n_topics+1;}
	if($t107 == "Yes/Si") {$resultado= $resultado . "1.7- Image Processing and Analysis / Procesamiento y análisis de imágenes<br>";$n_topics=$n_topics+1;}
	if($t108 == "Yes/Si") {$resultado= $resultado . "1.8- Green Engineering and Ecodesign / Ingeniería verde y ecodiseño<br>";$n_topics=$n_topics+1;}
	if($t109 == "Yes/Si") {$resultado= $resultado . "1.9- Product Lifecycle Management / Gestión del ciclo de vida del producto<br>";$n_topics=$n_topics+1;}
	if($t110 == "Yes/Si") {$resultado= $resultado . "1.10- Systems Engineering and Design / Diseño e ingeniería de sistemas<br>";$n_topics=$n_topics+1;}
	if($t111 == "Yes/Si") {$resultado= $resultado . "1.11- Systems Engineering and Design / Diseño centrado en el usuario<br>";$n_topics=$n_topics+1;}
	if($t112 == "Yes/Si") {$resultado= $resultado . "1.12- Robust Design, Reliability and Maintenance / Diseño robusto, fiabilidad y mantenimiento<br>";$n_topics=$n_topics+1;}
	if($t113 == "Yes/Si") {$resultado= $resultado . "1.13- Circular Economy / Economía circular<br>";$n_topics=$n_topics+1;}
	
	if($t201 == "Yes/Si") {$resultado= $resultado . "2.1- Product Manufacturing / Fabricación de productos<br>";$n_topics=$n_topics+1;}
	if($t202 == "Yes/Si") {$resultado= $resultado . "2.2- Additive Manufacturing / Fabricación aditiva<br>";$n_topics=$n_topics+1;}
	if($t203 == "Yes/Si") {$resultado= $resultado . "2.3- Experimental Methods in Product Development / Métodos experimentales en el desarrollo de productos<br>";$n_topics=$n_topics+1;}
	if($t204 == "Yes/Si") {$resultado= $resultado . "2.4- Advanced Manufacturing / Fabricación avanzada<br>";$n_topics=$n_topics+1;}
	if($t205 == "Yes/Si") {$resultado= $resultado . "2.5- Configurable Manufacturing Systems / Sistemas de fabricación reconfigurables<br>";$n_topics=$n_topics+1;}
	if($t206 == "Yes/Si") {$resultado= $resultado . "2.6- Smart Production Systems and Advanced Manufacturing Technologies / Sistemas de producción inteligentes y tecnologías de fabricación avanzadas<br>";$n_topics=$n_topics+1;}
	if($t207 == "Yes/Si") {$resultado= $resultado . "2.7- Flexible Assemblies / Ensamblajes flexibles<br>";$n_topics=$n_topics+1;}
	if($t208 == "Yes/Si") {$resultado= $resultado . "2.8- Re-manufacturing / Re-fabricación<br>";$n_topics=$n_topics+1;}
	if($t209 == "Yes/Si") {$resultado= $resultado . "2.9- Industry 4.0 / Industria 4.0<br>";$n_topics=$n_topics+1;}
	if($t210 == "Yes/Si") {$resultado= $resultado . "2.10- Rapid Prototyping / Prototipado rápido<br>";$n_topics=$n_topics+1;}
	
	if($t301 == "Yes/Si") {$resultado= $resultado . "3.1- Nautical, Aeronautical and Aerospace Modelling and Design / Diseño y modelado náutico, aeronáutico y aeroespacial<br>";$n_topics=$n_topics+1;}
	if($t302 == "Yes/Si") {$resultado= $resultado . "3.2- Biomechanics / Biomecánica<br>";$n_topics=$n_topics+1;}
	if($t303 == "Yes/Si") {$resultado= $resultado . "3.3- 3D Modelling for Biological Structures / Modelado 3D en estructuras biológicas<br>";$n_topics=$n_topics+1;}
	if($t304 == "Yes/Si") {$resultado= $resultado . "3.4- Computer Aided Design for Pathologies Diagnosis / Métodos asistidos por ordenador para diagnosis de patologías<br>";$n_topics=$n_topics+1;}
	if($t305 == "Yes/Si") {$resultado= $resultado . "3.5- Biological Systems Visualization and Simulation / Simulación y visualización de sistemas biológicos<br>";$n_topics=$n_topics+1;}
	if($t306 == "Yes/Si") {$resultado= $resultado . "3.6- Medical Modelling and Design / Diseño y modelado médico<br>";$n_topics=$n_topics+1;}
	
	
	if($t401 == "Yes/Si") {$resultado= $resultado . "4.1- Virtual Simulation / Simulación virtual<br>";$n_topics=$n_topics+1;}
	if($t402 == "Yes/Si") {$resultado= $resultado . "4.2- Virtual and Augmented Reality / Realidad virtual y aumentada<br>";$n_topics=$n_topics+1;}
	if($t403 == "Yes/Si") {$resultado= $resultado . "4.3- Reverse Engineering / Ingeniería inversa<br>";$n_topics=$n_topics+1;}
	if($t404 == "Yes/Si") {$resultado= $resultado . "4.4- Virtual Prototyping and 3D Modelling / Prototipado virtual e impresión 3D<br>";$n_topics=$n_topics+1;}
	if($t405 == "Yes/Si") {$resultado= $resultado . "4.5- Geometric Modelling and Analysis / Modelado y análisis geométrico<br>";$n_topics=$n_topics+1;}
	if($t406 == "Yes/Si") {$resultado= $resultado . "4.6- Surveying, Mapping and GIS Techniques / Técnicas de topografía, cartografía y SIG<br>";$n_topics=$n_topics+1;}
	if($t407 == "Yes/Si") {$resultado= $resultado . "4.7- BIM new technologies / Nuevas metodologías BIM<br>";$n_topics=$n_topics+1;}
	if($t408 == "Yes/Si") {$resultado= $resultado . "4.8- BIM and Architecture / BIM y arquitectura<br>";$n_topics=$n_topics+1;}
	if($t409 == "Yes/Si") {$resultado= $resultado . "4.9- Simulation and Virtual Approach / Simulación y enfoques virtuales<br>";$n_topics=$n_topics+1;}
	
	if($t501 == "Yes/Si") {$resultado= $resultado . "5.1- Teaching Product Design and Drawing History / La enseñanza del diseño de producto e historia del dibujo<br>";$n_topics=$n_topics+1;}
	if($t502 == "Yes/Si") {$resultado= $resultado . "5.2- Teaching Engineerng Drawing / Enseñanza de dibujo de ingeniería<br>";$n_topics=$n_topics+1;}
	if($t503 == "Yes/Si") {$resultado= $resultado . "5.3- Representation Techniques / Técnicas de representación<br>";$n_topics=$n_topics+1;}
	if($t504 == "Yes/Si") {$resultado= $resultado . "5.4- Education, Learning and Knowledge / Educación, aprendizaje y conocimiento<br>";$n_topics=$n_topics+1;}
	if($t505 == "Yes/Si") {$resultado= $resultado . "5.5- Innovative Teaching Experiences / Proyectos docentes innovadores<br>";$n_topics=$n_topics+1;}
	if($t506 == "Yes/Si") {$resultado= $resultado . "5.6- Graphic Design / Diseño gráfico<br>";$n_topics=$n_topics+1;}
	if($t507 == "Yes/Si") {$resultado= $resultado . "5.7- Interactive 3D Support / Ayudas 3D interactivas<br>";$n_topics=$n_topics+1;}
	if($t508 == "Yes/Si") {$resultado= $resultado . "5.8- New Approaches in the Teaching/Learning Process / Nuevos enfoques en el proceso de enseñanza / aprendizaje<br>";$n_topics=$n_topics+1;}
	
	
	if($t601 == "Yes/Si") {$resultado= $resultado . "6.1- Geometric Product Specification and Tolerancing / Tolerancias y especificaciones geométricas de producto<br>";$n_topics=$n_topics+1;}
	if($t602 == "Yes/Si") {$resultado= $resultado . "6.2- Geometrical and Functional Characterization of Products / Caracterización geométrica y funcional de productos<br>";$n_topics=$n_topics+1;}
	if($t603 == "Yes/Si") {$resultado= $resultado . "6.3- Sustainability / Sostenibilidad<br>";$n_topics=$n_topics+1;}
	if($t604 == "Yes/Si") {$resultado= $resultado . "6.4- Innovation and Creativity Methods / Métodos de creatividad e innovación<br>";$n_topics=$n_topics+1;}
	if($t605 == "Yes/Si") {$resultado= $resultado . "6.5- Collaborative Engineering / Ingeniería colaborativa<br>";$n_topics=$n_topics+1;}
	if($t606 == "Yes/Si") {$resultado= $resultado . "6.6- Industrial and Intellectual Property Management / Gestión de propiedad intelectual e industrial<br>";$n_topics=$n_topics+1;}
	if($t607 == "Yes/Si") {$resultado= $resultado . "6.7- Research Methods and Design / Diseño y métodos de investigación<br>";$n_topics=$n_topics+1;}


	

	
	
	
		
	



	
							//******************** generar una contraseña   ************
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
	
							//******************** FIN generar una contraseña   ************	
	
	

	
//  ******************* Subida de Ficheros************************
if ($n_topics >= 4){                            // 0=ok ; 1 = error; 2= fichero demasiado pesado; 3= extension inadecuada
	
$target_dir = "uploads_comite/";
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
  echo "Sorry, your file is too large. / Disculpe, su fichero es demasiado pesado";
  $uploadOk = 0;
	$error_fileUpload = 2; //Error fichero demasiado Pesado
}

	
	
	
	
	
// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
//  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//  $uploadOk = 0;
//}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //echo "Sorry, your file was not uploaded.";
	$error_fileUpload = 1;
	
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	 $error_fileUpload = 0;
  }	  
	
 else {
    //echo "Sorry, there was an error uploading your file.";
	  $error_fileUpload = 1;
  }
}
	
}	//  *******************FIN Subida de Ficheros************************
	



	//  ******************* SQL ************************

if ($n_topics >= 4 && $error_fileUpload == 0){
	
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "nueva_inge_2534";



$conn = new mysqli($servername, $username, $password_db, $dbname);	// Abre base de datos
if ($conn->connect_error) {																
  die("Connection failed: " . $conn->connect_error);
	$error_sql = 1;
}
	
	

//$consulta_ver = "SELECT * FROM datos WHERE clave = '$clave' OR foto= '$foto'";								// Consulta datos del Usuario
	
//$consulta_actualizar_datos = "UPDATE datos SET nombre= '$nombre', telefono= '$telefono', email='$correo', direccion= '$direccion', puerta= //'$puerta', editable= 'No', comentario= '$comentario'  WHERE foto= '$foto'";	
	
//$consulta_actualizar_datos = "UPDATE datos SET clave= '$clave',  nombre= '$nombre', telefono= '$telefono', //email='$email', direccion= '$direccion', puerta= '$puerta', editable= 'No', comentario= '$comentario'  WHERE clave= $clave'";	

$consulta_insertar_datos = "INSERT INTO tb_comite (Nombre, Apellidos, Empresa, Email, t101, t102, t103, t104, t105, t106, t107, t108, t109, t110, t111, t112, t113, t201, t202, t203, t204, t205, t206, t207, t208, t209, t210, t301, t302, t303, t304, t305, t306, t401, t402, t403, t404, t405, t406, t407, t408, t409, t501, t502, t503, t504, t505, t506, t507, t508, t601, t602, t603, t604, t605, t606, t607, File, New_File, Password) VALUES ('$nombre', '$apellidos', '$compania', '$correo', '$t101', '$t102', '$t103', '$t104', '$t105', '$t106', '$t107', '$t108', '$t109', '$t110', '$t111', '$t112', '$t113', '$t201', '$t202', '$t203', '$t204', '$t205', '$t206', '$t207', '$t208', '$t209', '$t210', '$t301', '$t302', '$t303', '$t304', '$t305', '$t306', '$t401', '$t402', '$t403', '$t404', '$t405', '$t406', '$t407', '$t408', '$t409', '$t501', '$t502', '$t503', '$t504', '$t505', '$t506', '$t507', '$t508', '$t601', '$t602', '$t603', '$t604', '$t605', '$t606', '$t607','$file_name', '$new_file_name', '$password')";	
	
	


//$consulta_insertar_datos = "INSERT INTO datos_co2 (co2) VALUES ('$co2')";	
//$consulta_insertar_datos = "INSERT INTO tb_ponencias (Nombre, Apellidos, Empresa, Telefono, Email, Titulo, Autores, KeyWords, Topics, Sub_Topics, File, New_File, Password) VALUES ('$nombre', '$apellidos', '$compania','$telefono', '$correo', '$titulo','$autor', '$keywords', '$topics','$provincia', '$file_name', '$new_file_name', '$password')";	
	
//if($error_fileUpload == 0 && $error_email == 0){
	
	if (mysqli_query($conn, $consulta_insertar_datos)) {
     //echo "El nuevo datos se ha insertado";
}
	
	else{
    echo "ERROR: Problemas al insertar los datos. " . mysqli_error($conn);
		$error_sql = 1;
}
	

	
	mysqli_close($conn);
	
}
//************** FIN SQL  ****************	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//  ******************* EMAIL************************
	
if ($n_topics >= 4 && $error_fileUpload == 0 && $error_sql == 0){

$body ="<h3><strong><u>Scientific committee member selection – 31st INGEGRAF International Conference<br> 
Selección de miembros del comité científico – 31 Congreso Internacional INGEGRAF 2022</u></strong></h3><br>".
	"<strong><h3>Registered information / Información registrada:</h3></strong><br>".
	"First Name / Nombre: " . $nombre . 
	"<br>Last Name / Apellidos: " . $apellidos . 
	"<br>University-Company / Institución-Empresa: " . $compania . 
	"<br>E-mail / Correo Electrónico: " . $correo.
	"<br>Filename / Nombre del fichero: " .$file_name.
		
	"<br><h3>Selected topics / Temas seleccionados:  </h3>" .
	$resultado .
	"<br><br>For any question contact the organizing committee sending an email to 31congreso.ingegraf@uma.es <br> Para cualquier consulta, puede contactar con el comité organizador enviando un correo-e a 31congreso.ingegraf@uma.es <br><br> Thanks for your participation. Kind regards. <br>Gracias por su participación. Un cordial saludo. <br><br>Organizing Committee / Comité Organizador<br> 31st INGEGRAF International Conference / 31 Congreso Internacional INGEGRAF <br><br>31congreso.ingegraf.uma.es <br> 31congreso.ingegraf@uma.es";
	
	
	



require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

	
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
    $mail->Subject = 'Scientific committee member selection – 31st INGEGRAF International Conference';
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
}
	
	//  ******************* FIN EMAIL************************
	
	
	
	
	
	
	
//  ******************* TELEGRAM bot: Degdp************************
/*	
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
	
//  ******************* FIN TELEGRAM bot: Degdp************************	
	
	
	


	
//************** Gestión de errores   ****************


	
if($n_topics < 4){
		
	echo '<script>
			alert("Sorry for the inconvenience, but you must select a minimum of 4 topics. \n \n Disculpe las molestias, pero debe seleccionar un mínimo de 4 temas.")
			window.history.go(-1);
			</script>';		
	}	
	
	
	
if($error_fileUpload > 0){
		
	echo '<script>
			alert("Sorry for the inconvenience but the maximum file size allowed has been exceeded.\n \n Disculpe las molestias, pero se ha excedido el tamaño máximo de fichero permitido.")
			window.history.go(-1);
			</script>';		
	}


	


if($error_sql == 1){
		
	echo '<script>
			alert("Disculpe las molestias, Se ha producido un error inesperado en la carga de sus datos, en nuestra base de datos.")
			window.history.go(-1);
			</script>';		
	}	

	
	
	
if($error_sql == 0 &&  $error_email == 0 && $error_fileUpload == 0 && $n_topics >= 4){
	

	
		echo '<script>
			alert("The message was sent successfully. Shortly, a confirmation email will be received.\n \n El mensaje se envió correctamente, en breve recibirá un correo-e de confirmación.")
			window.location.replace("https://31congreso.ingegraf.uma.es/");
			</script>';		
	}	





?>

	

	
</body>
</html>