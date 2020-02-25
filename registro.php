<?php
//conectar
include 'templates/cabecera_principal.php';
require 'conexiones/conexiones.php';
session_start();


		


?>


    

    <div class="custom-breadcrumns border-bottom">
    <div class="site-section">
      <div class="container">
        <a href="index.php">Incio</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Registro</span>
      </div>
    </div>

    
        


<div class="row justify-content-center">
      <div class="col-md-5">
 
 

<form action="registro1.php" method="POST">
		<?php
		if($_SESSION["Mensajito"]==1) {
		echo(" Ese usuario ya está registrado ");
		echo("</br>");
		echo("</br>");
		}
		?>
		
		Nombre:<br>
		<input type="text" size="40" maxlength="64" name="Nombre" /><br><br>
	
		Contraseña: <br>
		<input type="password" size="40" name="Password"/><br><br>
		Correo Electrónico:<br>
		<input type="text" size="40" maxlength="64" name="Correo" /><br><br>
		
		
			
		
		<input type="submit" value="Enviar"/>
    <input type="reset" value="Borrar" /><br><br><br>
    
	</form>
  </div>
  
  </div>

   



<?php include 'templates/pie.php';?>