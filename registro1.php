<?php
//conectar

require 'conexiones/conexiones.php';
session_start();
//SQL con marcadores

    $_SESSION["Nombre"]=$_POST["Nombre"];

	$_SESSION["Password"]=$has=password_hash($_POST["Password"], PASSWORD_DEFAULT);
	
	$_SESSION["Correo"]=$_POST["Correo"];
	$_SESSION["Mensajito"]=0;

$sqlcom="SELECT Nombre FROM usuarios WHERE Nombre='".$_SESSION["Nombre"]."'";
$resultado_select=$conexionPDO->query($sqlcom);
$NOmbrerep= $resultado_select->fetch(PDO::FETCH_ASSOC);


//Si no está vacío significa que ya existe ese user
if (!empty($NOmbrerep)) {
	//echo("Ha entrado al if");
    $NN = implode ($NOmbrerep);
	echo($NN);
	session_unset();
	$_SESSION["Mensajito"]=1;
	header('Location: registro.php');
}else
{


//Explicacion: hacemos una consulta a la bbdd con la variable de sesion "Nombre", para sacar la
//fecha de fin de suscripcion del usuario que se ha conectado.
//Como el resultado de la consulta es un Array lo pasamos a String con Implode
//Luego lo comparamos con la fecha de hoy para ver si tenemos que poner el cotador o no.



	
	
	
$sql="INSERT INTO `usuarios` (`Nombre`, `Psw`, `Email`) VALUES( ?, ?, ?)";

//preparar
$stmtPDO=$conexionPDO-> prepare($sql);
//Dar valores a los parámetros


$Nombre = $_POST['Nombre'];

$Password = $_SESSION["Password"];


$Correo = $_POST['Correo'];


	echo("ha entrado aqui");
	echo($Nombre);
    $stmtPDO->execute(array($Nombre,$Password,$Correo)); 
    header('Location: index_usuario.php');




}

?>