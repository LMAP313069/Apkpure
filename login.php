<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>
</head>

<body>


<?php
	
		if(isset($_POST["ingresar"])){
	
	include ("conexion1.php");
	$cn=fnconexion();
	
	$usuario=$_POST["txtusuario"];
	$clave=$_POST["txtclave"];

			

	$rs=@mysql_query("select * from usuario where email ='$usuario' and clave = '$clave' and clave1='$clave'", $cn);
	$numero_filas =@mysql_num_rows($rs);
	
		if($numero_filas>0){
			
			//SESSION 
					session_start();
	$_SESSION["usuario"] = $usuario;	
			
			echo "<script>
			alert('Bienvenido ha APKPURE');
			window.history.go(-2);
			</script>";
			
					
		}else {
			
				echo "<script>
			alert('Usuario o comtraseña incorrecta ó el usuario no existe');
			window.history.go(-1);
			</script>";
			
		}
			

			
			
			
		mysql_free_result($rs);
			mysql_close($cn);
			
			
	}
	
	
//	if($numero_filas==0){
	
//	}else {

//		echo "<a href=formulario1.html>Consultar</a>";
//}
	
	
	
	
	?>

</body>
</html>