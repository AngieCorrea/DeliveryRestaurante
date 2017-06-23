<?php
 


 include("models/classConexion.php");
	$db = new MySQL();
	$consulta = $db->consulta("SELECT idlugar,nombre FROM lugar");

	$combo = "<select name='lugar'>";
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){ 
	   $combo .= '<OPTION VALUE="'.$resultados['idlugar'].'">'.$resultados['nombre'].'</OPTION>';
	 }
	}

	$combo .='</select>';

	echo $combo;
?>