<?php


include 'templates/cabecera_usuario.php';


?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Crea nuevas tareas</h2>
              <p>Crea tus porpias tareas para poder ejecutarlas a través de una tarjeta RFID.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Inicio</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="tareas.php">Tareas</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="vertarea.php">Ver mis Tareas</a>
      </div>
    </div>



    <div class="row justify-content-center">
      <div class="col-md-5">
      <form action="creartarea.php" method="POST">
		
		
		Nombre Tarea:<br>
		<input type="text" size="40" maxlength="64" name="Nombre" /><br><br>
	
		Descripcion: <br>
		<input type="text" size="40" name="Descripcion"/><br><br>
		
		
		
		<input type="submit" value="Enviar"/>
    <input type="reset" value="Borrar" /><br><br><br>
   
    
    </form>
    
    
  </div>
  
  </div>

<?php  include 'templates/pie.php'; ?>