<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Cuenta</title>
</head>

<body>

<?php
	
	if(isset($_POST["eliminar"])){
	
	include ("conexion1.php");
	$cn=fnconexion();
	
	$email=$_POST["txtemail"];
	$sqleliminar="DELETE FROM usuario WHERE email='$email'";
	
	$rs=@mysql_query($sqleliminar,$cn);
	
	if($rs>0){
		echo  "<br>";
		@mysql_query("commit",$cn);
		
		echo "<script>
			alert('Se elimino su Cuenta, Gracias');
			window.history.go(-1);
			</script>";
		
	}else {
		// Muestra el mensaje de error de mysql
		echo (@mysql_error());
	}
	
	}
		
	?>



</body>
</html>