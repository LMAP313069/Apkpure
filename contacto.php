<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>


<body>

<?php
	
	if(isset($_POST["enviar"])){
	
	include("conexion1.php");
	$cn=fnconexion();
	
	$nombre=$_POST["txtnombre"];
	$email=$_POST["txtemail"];
	$mensaje=$_POST["txamensaje"];
	
	$sqlinsert="insert into contacto (nombre, email, mensaje) values ('$nombre','$email','$mensaje')";
		
	
	// los datos se envian a la base de datos
		
		$rs=@mysql_query($sqlinsert,$cn);
		
			if(!$rs){
			
			echo "Error al enviar el mensaje";
			
		}else {
				
			echo "
			<script>
			alert('Mensaje enviado satisfactoriamente');
			window.history.go(-1);
			</script>
			";
			
				
				
		}
		
		
	@mysql_query("commit",$cn);
		
	}
	
	
	?>

</body>
</html>