<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BASE DE DATOS</title>
</head>
<body>

<?php
	function fnconexion(){
		
	$cn = new mysqli('localhost','root','','apkpure');
//	$bd =@mysql_select_db('apkpure',$cn);
	
	// VERIFICAR EL ESTADO DE  LA CONEXION
//	if(($cn==true)&&($bd==true)){
	//	echo "Conexión Satisfactoria";
		
	if ($cn){
		
		
	}else {
		echo ("error".@mysql_error());
		@mysql_close($cn);
	}
		return $cn;
	}
	
	
	?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>