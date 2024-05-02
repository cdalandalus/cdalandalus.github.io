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
	if($t104 == "Yes/Si") $resultado= $resultado . "1.4- Knowledge-based Engineering / Ingeniería basada en el conocimiento<br>";
	if($t105 == "Yes/Si") $resultado= $resultado . "1.5- Industrial Design / Diseño industrial<br>";
	if($t106 == "Yes/Si") $resultado= $resultado . "1.6- Human factors and Ergonomy / Ergonomía y factores humanos<br>";
	if($t107 == "Yes/Si") $resultado= $resultado . "1.7- Image Processing and Analysis / Procesamiento y análisis de imágenes<br>";
	if($t108 == "Yes/Si") $resultado= $resultado . "1.8- Green Engineering and Ecodesign / Ingeniería verde y ecodiseño<br>";
	if($t109 == "Yes/Si") $resultado= $resultado . "1.9- Product Lifecycle Management / Gestión del ciclo de vida del producto<br>";
	if($t110 == "Yes/Si") $resultado= $resultado . "1.10- Systems Engineering and Design / Diseño e ingeniería de sistemas<br>";
	if($t111 == "Yes/Si") $resultado= $resultado . "1.11- Systems Engineering and Design / Diseño centrado en el usuario<br>";
	if($t112 == "Yes/Si") $resultado= $resultado . "1.12- Robust Design, Reliability and Maintenance / Diseño robusto, fiabilidad y mantenimiento<br>";
	if($t113 == "Yes/Si") $resultado= $resultado . "1.13- Circular Economy / Economía circular<br>";
	
	if($t201 == "Yes/Si") $resultado= $resultado . "2.1- Product Manufacturing / Fabricación de productos<br>";
	if($t202 == "Yes/Si") $resultado= $resultado . "2.2- Additive Manufacturing / Fabricación aditiva<br>";
	if($t203 == "Yes/Si") $resultado= $resultado . "2.3- Experimental Methods in Product Development / Métodos experimentales en el desarrollo de productos<br>";
	if($t204 == "Yes/Si") $resultado= $resultado . "2.4- Advanced Manufacturing / Fabricación avanzada<br>";
	if($t205 == "Yes/Si") $resultado= $resultado . "2.5- Configurable Manufacturing Systems / Sistemas de fabricación reconfigurables<br>";
	if($t206 == "Yes/Si") $resultado= $resultado . "2.6- Smart Production Systems and Advanced Manufacturing Technologies / Sistemas de producción inteligentes y tecnologías de fabricación avanzadas<br>";
	if($t207 == "Yes/Si") $resultado= $resultado . "2.7- Flexible Assemblies / Ensamblajes flexibles<br>";
	if($t208 == "Yes/Si") $resultado= $resultado . "2.8- Re-manufacturing / Re-fabricación<br>";
	if($t209 == "Yes/Si") $resultado= $resultado . "2.9- Industry 4.0 / Industria 4.0<br>";
	if($t210 == "Yes/Si") $resultado= $resultado . "2.10- Rapid Prototyping / Prototipado rápido<br>";
	
	if($t301 == "Yes/Si") $resultado= $resultado . "3.1- Nautical, Aeronautical and Aerospace Modelling and Design / Diseño y modelado náutico, aeronáutico y aeroespacial<br>";
	if($t302 == "Yes/Si") $resultado= $resultado . "3.2- Biomechanics / Biomecánica<br>";
	if($t303 == "Yes/Si") $resultado= $resultado . "3.3- 3D Modelling for Biological Structures / Modelado 3D en estructuras biológicas<br>";
	if($t304 == "Yes/Si") $resultado= $resultado . "3.4- Computer Aided Design for Pathologies Diagnosis / Métodos asistidos por ordenador para diagnosis de patologías<br>";
	if($t305 == "Yes/Si") $resultado= $resultado . "3.5- Biological Systems Visualization and Simulation / Simulación y visualización de sistemas biológicos<br>";
	if($t306 == "Yes/Si") $resultado= $resultado . "3.6- Medical Modelling and Design / Diseño y modelado médico<br>";
	
	
	if($t401 == "Yes/Si") $resultado= $resultado . "4.1- Virtual Simulation / Simulación virtual<br>";
	if($t402 == "Yes/Si") $resultado= $resultado . "4.2- Virtual and Augmented Reality / Realidad virtual y aumentada<br>";
	if($t403 == "Yes/Si") $resultado= $resultado . "4.3- Reverse Engineering / Ingeniería inversa<br>";
	if($t404 == "Yes/Si") $resultado= $resultado . "4.4- Virtual Prototyping and 3D Modelling / Prototipado virtual e impresión 3D<br>";
	if($t405 == "Yes/Si") $resultado= $resultado . "4.5- Geometric Modelling and Analysis / Modelado y análisis geométrico<br>";
	if($t406 == "Yes/Si") $resultado= $resultado . "4.6- Surveying, Mapping and GIS Techniques / Técnicas de topografía, cartografía y SIG<br>";
	if($t407 == "Yes/Si") $resultado= $resultado . "4.7- BIM new technologies / Nuevas metodologías BIM<br>";
	if($t408 == "Yes/Si") $resultado= $resultado . "4.8- BIM and Architecture / BIM y arquitectura<br>";
	if($t409 == "Yes/Si") $resultado= $resultado . "4.9- Simulation and Virtual Approach / Simulación y enfoques virtuales<br>";
	
	if($t501 == "Yes/Si") $resultado= $resultado . "5.1- Teaching Product Design and Drawing History / La enseñanza del diseño de producto e historia del dibujo<br>";
	if($t502 == "Yes/Si") $resultado= $resultado . "5.2- Teaching Engineerng Drawing / Enseñanza de dibujo de ingeniería<br>";
	if($t503 == "Yes/Si") $resultado= $resultado . "5.3- Representation Techniques / Técnicas de representación<br>";
	if($t504 == "Yes/Si") $resultado= $resultado . "5.4- Education, Learning and Knowledge / Educación, aprendizaje y conocimiento<br>";
	if($t505 == "Yes/Si") $resultado= $resultado . "5.5- Innovative Teaching Experiences / Proyectos docentes innovadores<br>";
	if($t506 == "Yes/Si") $resultado= $resultado . "5.6- Graphic Design / Diseño gráfico<br>";
	if($t507 == "Yes/Si") $resultado= $resultado . "5.7- Interactive 3D Support / Ayudas 3D interactivas<br>";
	if($t508 == "Yes/Si") $resultado= $resultado . "5.8- New Approaches in the Teaching/Learning Process / Nuevos enfoques en el proceso de enseñanza / aprendizaje<br>";
	
	
	if($t601 == "Yes/Si") $resultado= $resultado . "6.1- Geometric Product Specification and Tolerancing / Tolerancias y especificaciones geométricas de producto<br>";
	if($t602 == "Yes/Si") $resultado= $resultado . "6.2- Geometrical and Functional Characterization of Products / Caracterización geométrica y funcional de productos<br>";
	if($t603 == "Yes/Si") $resultado= $resultado . "6.3- Sustainability / Sostenibilidad<br>";
	if($t604 == "Yes/Si") $resultado= $resultado . "6.4- Innovation and Creativity Methods / Métodos de creatividad e innovación<br>";
	if($t605 == "Yes/Si") $resultado= $resultado . "6.5- Collaborative Engineering / Ingeniería colaborativa<br>";
	if($t606 == "Yes/Si") $resultado= $resultado . "6.6- Industrial and Intellectual Property Management / Gestión de propiedad intelectual e industrial<br>";
	if($t607 == "Yes/Si") $resultado= $resultado . "6.7- Research Methods and Design / Diseño y métodos de investigación<br>";


	

	
	
	
		
	
	//if($topics=="1") $topics="1.- Diseño y desarrollo de producto / Product Design and Development";


	
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
	
	
	
//echo $t101."<br/>";	
//echo $t102."<br/>";
//echo $t103."<br/>";	
//echo $t104."<br/>";	
	
	
/*	
// Depurar:
echo ("Solo para Depurar:<br>");

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
	
//$error_fileUpload = 0; // 0=ok ; 1 = error; 2= fichero demasiado pesado
//$error_email = 0;
//$error_sql = 0;

	
	
//  ******************* Subida de Ficheros************************

	
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
if ($_FILES["fileToUpload"]["size"] > 5000000) {		// if ($_FILES["fileToUpload"]["size"] > 500000) {
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
}													//  *******************FIN Subida de Ficheros************************
	


	
	
	
	
	//  ******************* EMAIL************************


$body ="<h3><strong><u>Scientific committee member selection – 31st INGEGRAF International Conference<br> 
Selección de miembros del comité científico – 31 Congreso Internacional INGEGRAF 2022</u></strong></h3><br><br>".
	"Registered information / Información registrada:<br>".
	"First Name / Nombre: " . $nombre . 
	"<br>Last Name / Apellidos: " . $apellidos . 
	"<br>University-Company / Institución-Empresa: " . $compania . 
	"<br>E-mail / Correo Electrónico: " . $correo.
	"<br>Filename / Nombre del fichero: " .$file_name.
	
	
	"<br><h3>Topics selected / Temas seleccionados: </h3><br><br>" .
	$resultado .

	/*"<br><br>1.1- Diseño integrado de productos y procesos / Integrated Product and Process Design: " . $t101.
	"<br>1.2- Diseño interactivo / Interactive Design: " . $t102.
	"<br>1.3- Métodos de diseño innovadores / Innovative Design Methods: " . $t103.
	"<br>1.4- Ingeniería basada en el conocimiento / Knowledge-based Engineering: " . $t104.
	"<br>1.5- Diseño industrial / Industrial Design: " . $t105.
	"<br>1.6- Ergonomía y factores humanos / Human factors and Ergonomy: " . $t106.
	"<br>1.7- Procesamiento y análisis de imágenes / Image Processing and Analysis: " . $t107.
	"<br>1.8- Ingeniería verde y ecodiseño / Green Engineering and Ecodesign: " . $t108.
	"<br>1.9- Gestión del ciclo de vida del producto / Product Lifecycle Management: " . $t109.
	"<br>1.10- Diseño e ingeniería de sistemas / Systems Engineering and Design: " . $t110.
	"<br>1.11- Diseño centrado en el usuario / Systems Engineering and Design: " . $t111.
	"<br>1.12- Diseño robusto, fiabilidad y mantenimiento / Robust Design, Reliability and Maintenance: " . $t112.
	"<br>1.13- Economía circular / Circular Economy: " . $t113.
 
	"<br><br>2.1- Fabricación de productos / Product Manufacturing: " . $t201.
	"<br>2.2- Fabricación aditiva / Additive Manufacturing: " . $t202.
	"<br>2.3- Métodos experimentales en el desarrollo de productos / Experimental Methods in Product Development: " . $t203.
	"<br>2.4- Fabricación avanzada / Advanced Manufacturing: " . $t204.
	"<br>2.5- Sistemas de fabricación reconfigurables / Configurable Manufacturing Systems: " . $t205.
	"<br>2.6- Sistemas de producción inteligentes y tecnologías de fabricación avanzadas / Smart Production Systems and Advanced Manufacturing Technologies: " . $t206.
	"<br>2.7- Ensamblajes flexibles / Flexible Assemblies: " . $t207.
	"<br>2.8- Re-fabricación / Re-manufacturing: " . $t208.
	"<br>2.9- Industria 4.0 / Industry 4.0: " . $t209.
	"<br>2.10- Prototipado rápido / Rapid Prototyping: " . $t210.

	"<br><br>3.1- Nautical, Aeronautical and Aerospace Modelling and Design / Diseño y modelado náutico, aeronáutico y aeroespacial: " . $t301.
	"<br>3.2- Biomechanics / Biomecánica: " . $t302.
	"<br>3.3- 3D Modelling for Biological Structures / Modelado 3D en estructuras biológicas: " . $t303.
	"<br>3.4- Computer Aided Design for Pathologies Diagnosis / Métodos asistidos por ordenador para diagnosis de patologías: " . $t304.
	"<br>3.5- Biological Systems Visualization and Simulation / Simulación y visualización de sistemas biológicos: " . $t305.
	"<br>3.6- Medical Modelling and Design / Diseño y modelado médico: " . $t306.

	"<br><br>4.1- Simulación virtual / Virtual Simulation: " . $t401.
	"<br>4.2- Realidad virtual y aumentada / Virtual and Augmented Reality: " . $t402.
	"<br>4.3- Ingeniería inversa / Reverse Engineering: " . $t403.
	"<br>4.4- Prototipado virtual e impresión 3D / Virtual Prototyping and 3D Modelling: " . $t404.
	"<br>4.5- Modelado y análisis geométrico / Geometric Modelling and Analysis: " . $t405.
	"<br>4.6- Técnicas de topografía, cartografía y SIG / Surveying, Mapping and GIS Techniques: " . $t406.
	"<br>4.7- BIM new technologies / Nuevas metodologías BIM: " . $t407.
	"<br>4.8- BIM y arquitectura / BIM and Architecture: " . $t408.
	"<br>4.9- imulación y enfoques virtuales / Simulation and Virtual Approach: " . $t409.

	"<br><br>5.1- La enseñanza del diseño de producto e historia del dibujo / Teaching Product Design and Drawing History: " . $t501.
	"<br>5.2- Enseñanza de dibujo de ingeniería / Teaching Engineerng Drawing: " . $t502.
	"<br>5.3- Técnicas de representación / Representation Techniques: " . $t503.
	"<br>5.4- Educación, aprendizaje y conocimiento / Education, Learning and Knowledge: " . $t504.
	"<br>5.5- Proyectos docentes innovadores / Innovative Teaching Experiences: " . $t505.
	"<br>5.6- Diseño gráfico / Graphic Design: " . $t506.
	"<br>5.7- Ayudas 3D interactivas / Interactive 3D Support: " . $t507.
	"<br>5.8- Nuevos enfoques en el proceso de enseñanza / aprendizaje / New Approaches in the Teaching/Learning Process: " . $t508.	
	
	"<br><br>6.1- Tolerancias y especificaciones geométricas de producto / Geometric Product Specification and Tolerancing: " . $t601.
	"<br>6.2- Caracterización geométrica y funcional de productos / Geometrical and Functional Characterization of Products: " . $t602.
	"<br>6.3- Sostenibilidad / Sustainability: " . $t603.
	"<br>6.4- Métodos de creatividad e innovación / Innovation and Creativity Methods: " . $t604.
	"<br>6.5- Ingeniería colaborativa / Collaborative Engineering: " . $t605.
	"<br>6.6- Gestión de propiedad intelectual e industrial / Industrial and Intellectual Property Management: " . $t606.
	"<br>6.7- Diseño y métodos de investigación / Research Methods and Design: " . $t607.	
	*/
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
    //$mail->addAddress('josem@uma.es', 'Solicitud 31 Congreso Ingegraf - Málaga 2022');               //Name is optional
	
	$mail->addBCC('josem@uma.es', 'Prueba de captura comité - Málaga 2022');
	
	
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
    $mail->Subject = 'Envio solicitud de Ponencia';
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
	
	
	
	//  ******************* SQL ************************
	
	



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
//}	
	
	
//	if ($resultado_ver = $conn->query($consulta_ver)) {
//		$peticion_ver = $resultado_ver->num_rows;		// Cuenta los usuarios que ha encontrado
		//echo("Numero de Usuarios que conincide: " . $peticion_ver . "<br />" . "<br />");
/*		
		    while ($fila = $resultado_ver->fetch_assoc()) { ?>
	
						<img src="image/<?php echo $fila["foto"]; ?>" width="200" height=auto></br>
						<?php echo "Fecha/Hora Registro: " . $fila["fecha"]; ?> </br></br>
						<?php echo "Id: " . $fila["Id"]; ?> </br>	
						<?php echo "Nombre: " . $fila["nombre"]; ?> </br>
						<?php echo "Clave: " . $fila["clave"]; ?> </br>
						<?php echo "Dirección: " . $fila["direccion"]; ?> </br>
						<?php echo "Puerta: " . $fila["puerta"]; ?> </br>
						<?php echo "Email: " . $fila["email"]; ?> </br>
						<?php echo "Telefono: " . $fila["telefono"]; ?> </br>
						<?php echo "Par / Impar: " . $fila["par_impar"]; ?> </br>
						<?php echo "Comentario: " . $fila["comentario"]; ?> </br>
<?php				
				}
*/		
		
//	}

	
//if ($peticion_ver == 0 and $clave_administrador == 'adminromeral'){
/*	
	if (mysqli_query($conn, $consulta_insertar_datos)) {
     echo "El nuevo datos se ha insertado";
}
	
	else{
    echo "ERROR: Problemas al insertar los datos. " . mysqli_error($conn);
}
	
*/	
//}


/*	
if ($peticion_ver > 0 and $clave_administrador=='adminromeral') { 
	
	echo "Número de Usuarios que coinciden con misma Clave o nombre Foto: " . $peticion_ver . "</br>" . "</br>";
	echo "EL USUARIO YA EXISTE CON LOS SIGUIENTES DATOS: " . "</br>" . "</br>";
	
	if ($resultado_ver = $conn->query($consulta_ver)) {
		$peticion_ver = $resultado_ver->num_rows;		// Cuenta los usuarios que ha encontrado
		//echo("Número de Usuarios: " . $peticion_ver . "<br />" . "<br />");
		
		    while ($fila = $resultado_ver->fetch_assoc()) { ?>
	
						<img src="image/<?php echo $fila["foto"]; ?>" width="200" height=auto></br>
						<?php echo "Fecha/Hora Registro: " . $fila["fecha"]; ?> </br></br>
						<?php echo "Id: " . $fila["Id"]; ?> </br>	
						<?php echo "Nombre: " . $fila["nombre"]; ?> </br>
						<?php echo "Clave: " . $fila["clave"]; ?> </br>
						<?php echo "Nombre de Foto: " . $fila["foto"]; ?> </br>
						<?php echo "Dirección: " . $fila["direccion"]; ?> </br>
						<?php echo "Puerta: " . $fila["puerta"]; ?> </br>
						<?php echo "Email: " . $fila["email"]; ?> </br>
						<?php echo "Telefono: " . $fila["telefono"]; ?> </br>
						<?php echo "Par / Impar: " . $fila["par_impar"]; ?> </br>
						<?php echo "Comentario: " . $fila["comentario"]; ?> </br>

<?php	
	}			
		
		
				}	
	}	
	
*/	
	
/*	

if(mysqli_query($conn, $consulta_actualizar_datos)){
    	echo "Registro Actualizado con Éxito.";
} 		else{
    		echo "ERROR: No se pudo eliminar registro $consulta. " . mysqli_error($link);
}	
*/
	
//************** Gestión de errores

	
if($error_fileUpload == 1){
		
	echo '<script>
			alert("Disculpe las molestias, ha habido un error en la subida del fichero. Posiblemente es demasiado pesado")
			window.history.go(-1);
			</script>';		
	}
	
if($error_fileUpload == 2){
		
	echo '<script>
			alert("Disculpe las molestias, el fichero es demasiado pesado.")
			window.history.go(-1);
			</script>';		
	}	
/*
if($error_email == 1){
		
	echo '<script>
			alert("Disculpe las molestias, Se ha producido un error inesperado en el envio del correo electrónico.")
			window.history.go(-2);
			</script>';		
	}	
*/
	


if($error_sql == 1){
		
	echo '<script>
			alert("Disculpe las molestias, Se ha producido un error inesperado en la carga de sus datos, en nuestra base de datos.")
			window.history.go(-1);
			window.location.reload(true);
			</script>';		
	}	

	
	
	
if($error_sql == 0 &&  $error_email == 0 && $error_fileUpload == 0){
	

	
		echo '<script>
			alert("The message was sent successfully, shortly receive a confirmation email.\n El mensaje se envió correctamente, en breve recibirá un correo-e de confirmación.")
			window.location.replace("https://digilab.uma.es/ingegraf/index.php");
			</script>';		
	}	


	
	

	
if($n_topics == 0){
	

	
		echo '<script>
			alert("0.")
			window.location.replace("https://digilab.uma.es/ingegraf/index.php");
			</script>';		
	}		
	
	
	
if($n_topics == 1){
	

	
		echo '<script>
			alert("1.")
			window.location.replace("https://digilab.uma.es/ingegraf/index.php");
			</script>';		
	}		
	
if($n_topics == 2){
	

	
		echo '<script>
			alert("2.")
			window.location.replace("https://digilab.uma.es/ingegraf/index.php");
			</script>';		
	}			
	
	
	
	
	

	
	
/*	
	
<script language="javascript" type="text/javascript">
		
		
			alert("The message was sent successfully, shortly receive a confirmation email.\n El mensaje se envió correctamente, en breve recibirá un correo-e de confirmación. ")
			
		   	window.localtion.assign("https://digilab.uma.es/ingegraf/index.php")
			
					
			</script>
*/

?>

	

	
</body>
</html>