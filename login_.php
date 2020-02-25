<?php include 'templates/cabecera_principal.php'; ?>
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Login</h2>
              <p>Logueate y comienza a gestionar tus tareas.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Incio</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>
    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                <div >
	<form action="login.php" method="POST">
		Introduzca su nombre:<br>
		<input type="text" size="40" maxlength="64" name="i_nombre" /><br><br>
		Introduzca su contraseña:<br>
		<input type="password" size="40" name="i_psw"/><br><br>
		<input type="submit" value="Enviar"/>
		<input type="reset" value="Borrar" />
	</form>
	<br><br><hr><br>
	</div>
                </div>
            </div>
        </div>
    </div>
 
 
 
<?php include 'templates/pie.php'; ?>