<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar</title>
</head>

<body>

                 <?php
	
	if(isset($_POST["registrar"])){
	
	include("conexion1.php");
	$cn=fnconexion();
	
	$email=$_POST["email"];
	$pasw=$_POST["pwd"];
	$pasw1=$_POST["pwd2"];
	
	$sqlinsert="INSERT INTO usuario (email, clave, clave1) VALUES ('$email','$pasw','$pasw1')";
//	$verificar_usuario=mysqli_query($cn, "SELECT * FROM usuario WHERE email = '$email'");
		
	//		  if(mysqli_num_rows($verificar_usuario)>0){
	//			  echo "<script>
		//	alert('El usuario ya esta Registrado');
	//		window.history.go(-1);
		//	</script>";
		//		  exit;
				  
				  
		//	  }
	// los datos se envian a la base de datos
		
		$rs=@mysql_query($sqlinsert,$cn);
		if(!$rs){
			
			echo "Error al Rigistrarse";
			
		}else {
			echo "<script>
			alert('Se Rigistrado Satisfactoriamente');
			 window.history.go(-1);
			</script>";
			
			//	 window.history.go(-1);
			
		}
	@mysql_query("commit",$cn);

		}
      ?>  


</body>
</html>