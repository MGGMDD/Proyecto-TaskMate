<?php

	//conexion con la base de datos y al servidor
	try{
	$conexionPDO=new PDO("mysql:host=localhost; dbname=hacker_tasker; charset=utf8","root","");
	$conexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
    }catch(Exception $e){
        die('Error:'.$e->GetMessage());
   
	}
?>	


