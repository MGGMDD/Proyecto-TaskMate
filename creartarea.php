<?php
//conectar

require 'conexiones/conexiones.php';
session_start();
//SQL con marcadores

    $_SESSION["Nombre_Tarea"]=$_POST["Nombre"];

	
	
	$_SESSION["Descripcion"]=$_POST["Descripcion"];
	$_SESSION["Mensajito"]=0;

$sqlcom="SELECT Nombre_Tarea FROM tareas WHERE Nombre_Tarea='".$_SESSION["Nombre_Tarea"]."'";
$resultado_select=$conexionPDO->query($sqlcom);
$NOmbrerep= $resultado_select->fetch(PDO::FETCH_ASSOC);


//Si no está vacío significa que ya existe ese user
if (!empty($NOmbrerep)) {
	//echo("Ha entrado al if");
    $NN = implode ($NOmbrerep);
	echo($NN);
	session_unset();
	$_SESSION["Mensajito"]=1;
	header('Location: tareas.php');
}else
{


//Explicacion: hacemos una consulta a la bbdd con la variable de sesion "Nombre", para sacar la
//fecha de fin de suscripcion del usuario que se ha conectado.
//Como el resultado de la consulta es un Array lo pasamos a String con Implode
//Luego lo comparamos con la fecha de hoy para ver si tenemos que poner el cotador o no.



	
	
	
$sql="INSERT INTO `tareas` (`Nombre_Tarea`, `Tarea`) VALUES( ?, ?)";

//preparar
$stmtPDO=$conexionPDO-> prepare($sql);
//Dar valores a los parámetros


$Nombre = $_POST['Nombre'];




$Descripcion = $_POST['Descripcion'];


	
    $stmtPDO->execute(array($Nombre,$Descripcion)); 
    header('Location: tareas.php');




}

?>