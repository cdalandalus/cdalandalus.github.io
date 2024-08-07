<!DOCTYPE html>
<html lang="es" >

<!--<head>
  <meta charset="UTF-8">
  <title>CodePen - Dropdown Menu - Responsive - 3 Mode - Multi Level Navigation Bar</title>
  <link rel="stylesheet" href="./style.css">

	
</head>-->

<!-- partial:index.partial.html -->
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <!--        <link rel="stylesheet" href="/css/css.css" />-->
	
  
  <title>Formulario de contactos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/gif" href="./img/Logo_DEGDP_-_Color_WEB.gif">
	
	
	
	  <!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="carousel.css" rel="stylesheet">


 <link rel="stylesheet" href="./css/style.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script src="https://kit.fontawesome.com/4fd5dbfee9.js" crossorigin="anonymous"></script><!--MIO-->
	
	
<style>
	
body{
	font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
	/*background-color: #F3FDDF;*/
	}
	
.carousel.carousel-fade .carousel-item {
    display: block;
    opacity: 0;
    transition: opacity ease-out 1.7s;
}

.carousel.carousel-fade .carousel-item.active {
    opacity: 1 !important;
}
.container-fluid {
  max-width: 1600px;
}
	
</style>
	

	
</head>

<body>
	


	
	
	

	
	
<div class="container-fluid">	
	
	<?php include 'encabezado.php';?>
	<?php include 'menu.php';?>	
	
</div>	
	
<br>


<div class="container">
	

	
	<br><br>
  <form action="email/enviar-correo.php" method="post">
    <h2>Formulario de Contacto / <span style="color:#797D7F;">Contact Us</span></h2><br>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Nombre: / <span style="color:#797D7F;">First Name:</span>  (*) </label>		<!--Nombre -->
          <input type="text" class="form-control" placeholder="" id="nombre" name="nombre" required>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Apellidos: /<span style="color:#797D7F;"> Last Name:</span> (*)</label>	           <!--Apellidos -->
          <input type="text" class="form-control" placeholder="" id="apellidos" name="apellidos" required>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>

<br>
	  
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="email">Correo Electrónico: / <span style="color:#797D7F;">Email Address:</span>(*)</label>	           <!--Institución-Empresa -->
          <input type="email" class="form-control" placeholder="" id="email" name="correo" required>
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Phone Number: / <span style="color:#797D7F;">Teléfono:</span></label>	           <!--Teléfono -->
          <input type="text" class="form-control" id="telefono" placeholder="No es obligatorio" name="telefono">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
<br>


    <!--  row   -->
<br>
    <div class="row">
      <div class="col-lg-12 md-6 sm-3">

        <div class="form-group">
			
          <label for="textarea">Contenido:  / <span style="color:#797D7F;">Content:</span>(*)</label>	           <!-- Contenido -->
		<textarea id="contenido" class="form-control" cols="100%" rows ="3" name="contenido" required></textarea>
			
			
          <!--<input type="textarea" class="form-control" id="contenido" placeholder="Descripción del contenido del mensaje / Description of message content"> -->
			
			
        </div>
		  
      </div>



    </div>
  
	  
<br>	  
	  
        <label for="newsletter">Verificación - consentimiento: / <span style="color:#797D7F;">Verification - consent: (*)</span></label>
    <div class="checkbox"></div>

	  
      <label>
        <input type="checkbox" value="Sure!" id="newsletter" required> Soy consciente de que mis datos serán tratados con pleno respeto a mi privacidad, tal y como se informa en el Reglamento (UE) 2016/679 <br>
		<span style="color:#797D7F;">I am aware that my data will be treated in full respect of my privacy, such as reported in the Regulation (EU) 2016/679</span>  
      </label>	  
		<br><br>
		
		
	  

	  
	  
	  

    <button type="submit" class="btn btn-primary">Enviar / Submit</button>
  </form>
	  
	<br><br>	
	(*) Campo Obligatorio / <span style="color:#797D7F;">Mandatory field </span>
	    <br><br>	
	  
	  

	
	
</div>        <!-- Fin container -->
		  
	  
	
	
	
	

	
	
<br><br><br>

	
		
	
	
    <!-- Option 1: Bootstrap Bundle with Popper -->	
 <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
	
	
    <!-- Option 1: Bootstrap Bundle with Popper -->	
	
<div class="container-fluid">		
	<?php include 'pie.php';?>
</div>	
	
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="./js/script.js"></script>

</body>
</html>
