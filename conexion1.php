<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
function fnconexion(){
		
	$cn =@mysql_connect('localhost','root','');
	$bd =@mysql_select_db('apkpure',$cn);
	
	// VERIFICAR EL ESTADO DE  LA CONEXION
	if(($cn==true)&&($bd==true)){
	//	echo "Conexión Satisfactoria";
		
	}else {
		echo ("error no hay conexion ".@mysql_error());
		@mysql_close($cn);
	}
		return $cn;
	}
	
	
	?>

</body>
</html>