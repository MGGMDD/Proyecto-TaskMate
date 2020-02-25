<?php


include 'templates/cabecera_principal.php'; 




require 'conexionPDO.php';

$conexionPDO->query("SET NAMES 'utf8'");
$sql_select="SELECT * FROM usuarios WHERE Email='".$_POST["i_nombre"]."'";

$resultado_select=$conexionPDO->query($sql_select);

if($resultado_select){
    $usuario = $resultado_select->fetch(PDO::FETCH_ASSOC);
	$iguales = password_verify($_POST["i_psw"], $usuario['Psw']);
    if ($iguales){
		
        $_SESSION["Nombre"]=$_POST["i_nombre"];
        ?>
        <div class="container">

        <?php
        echo "<br><br><br><br><br><p align='center'>Bienvenido. Login exitoso</p><br><br>";
		echo "<br><br><div align='center'><a href='index_usuario.php'>Ir a la página principal</a></div>";
        ?>
        </div>
        <?php
        return true;
    }
    else {
        echo "<br><br><br><br><br><p align='center'>Ha ocurrido un problema, usuario o contraseña incorrecto.</p><br><br>";
		echo "<br><br><div align='center'><a href='login_.php'>Volver a intentar</a></div>";
        return false;
    }
}
else{
    echo "<br><br><br><br><br><p align='center'>Usuario inexistente.</p><br><br>";
	echo "<br><br><div align='center'><a href='registro1.php'>Registrarse</a></div>";
    return false;
}
?>