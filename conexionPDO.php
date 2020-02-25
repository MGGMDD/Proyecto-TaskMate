<?php
try{
//echo "Comenzando la conexion";
//echo "<br>";	
$conexionPDO= new PDO("mysql:host=localhost; dbname=hacker_tasker; charset=utf8", "root","");
$conexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "La conexion se realizó de forma correcta";
//echo "<br>";
}catch(Exception$e) {
die ('Error: '.$e->GetMessage());
}
?>