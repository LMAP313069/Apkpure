<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DETALLE DE VENTA</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>





<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.html"><strong>APKPURE</strong></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="inverseNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="GAMES.html">GAMES<span class="sr-only">(current)</span></a></li>
        <li><a href="APPS.html">APPS</a></li>
        <li><a href="TEMAS.html">TOPICS</a></li>
        <li><a href="CONTACTS.html">CONTACTS</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre de aplicacion">
        </div>
        <button type="submit" class="btn btn-default"><strong>Buscar</strong></button>
      </form>
     <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><strong><img src="images/login.png" width="40px;" style="position:relative; margin-top: -5px; padding-left:5px; float: right">&nbsp;</strong></a></li>
     
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

	<div id="reporte" align="center">

		<h1 align="center">REGISTRO DE VENTA</h1>
		<hr>
		
		<?php

		include("conexion.php");
		include("mostrar.php");
		$cn=fnconexion();
		
		$NomApp = $_POST["juego"];
		$sistemaO = $_POST[ "s1" ];
		$precio = $_POST[ "txtprecio" ];
		$codseg = $_POST[ "txtcodseg" ];
		$TipoTarj = $_POST[ "s2" ];
		$NumTarj = $_POST[ "txtnumtarjeta" ];
		switch ( $sistemaO ) {

			case "Android":
				$imagen = "images/android.svg";
				break;
			case "IOS":
				$imagen = "images/apple.svg";
				break;
			case "Windows Phone":
				$imagen = "images/Windows.png";
				break;

		}

		switch ( $TipoTarj ) {
			case "Visa":
				$imagen1 = "images/visa.png";
				break;
			case "MasterCard":
				$imagen1 = "images/mc.png";
				break;
			case "BBVA":
				$imagen1 = "images/bbva.png";
				break;

		}
		
		


		echo "<strong>SISTEMA OPERATIVO</strong><br>";
		echo "<img src='$imagen' border='0' width='100' height='75'><br>";
		echo "<strong>PRECIO :</strong> s./ $precio <br>";

		echo "<h3><strong>DETALLE DE COMPRA</strong> </h3> <br>";
		echo "<strong>CLIENTE : </strong> Luis Miguel Anccasi Peréz<br> ";
		echo "<strong>TARJETA  </strong><br>";
		echo "<img src='$imagen1' border='0' width='100' height='50' style='position=relative'><br>";
		echo "<strong># DE TARJETA: </strong>$NumTarj <br>";
		echo "<strong>CODIGO DE SEGURIDAD : </strong>$codseg <br>";

		echo "<br>";
		echo "<br>";
		echo "<br>";

		?>


	</div>

	<?php
	echo "<a href='APLICACION1.html' style='font-size:2em; margin-left=50px;'><strong>&#9754;Volver</strong></a>";

	?>
	
	<a href="https://apkpure.com/tekken%E2%84%A2/eu.bandainamcoent.tekkenmobile/download?from=details" style="text-decoration:none; color: white"><label  for="activaventana" id="abremodal">Descargar APK</label></a>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>