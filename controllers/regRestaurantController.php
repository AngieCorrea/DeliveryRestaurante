<?php
	include("models/classConexion.php");
	 $nombre = $_POST['name'];
	 $ruc = $_POST['ruc'];
	 $direccion =$_POST['direccion'];
	 $telefono =$_POST['telefono'];
	 $idlugar = $_POST['lugar'];

   
	$db = new MySQL();
	$consulta = $db->consulta("INSERT into restaurante(nombre,ruc,direccion,teléfono,idlugar)values('$nombre','$ruc','$direccion','$telefono','$idlugar')");

	if ($consulta==true){
			echo 1;

			}else{
				echo 2;
			}
	
?>