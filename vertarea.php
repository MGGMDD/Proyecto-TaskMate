<?php
//conectar
include 'templates/cabecera_usuario.php';

require 'conexionPDO.php';
?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Todas sus tareas</h2>
              <p>Aquí podrá ver todas las tareas generadas.</p><br><br>
            </div>
          </div>
        </div>
      </div> 
    


<?php
$sentencia = $conexionPDO->prepare("SELECT * FROM `tareas` ;");
$sentencia->execute();
$listaTareas = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<?php foreach ($listaTareas as $tareas) { ?>

<br>
<div class="container">
  <div class="col-3">
    <div class="card">
   
      <div class="card-body">
        <span><?php echo $tareas['Nombre_Tarea']; ?></span>
        <span><?php echo $tareas['Tarea']; ?></span>
        
        
        
        <br>
      </div>
    </div>
  </div>
  <br>
</div>
<?php } ?>
<br>


<?php
include 'templates/pie.php'; ?>