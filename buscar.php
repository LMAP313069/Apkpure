<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BUSCAR APLICACION</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="sresultado.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body >

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand active" href="index.html"><strong>APKPURE</strong></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="inverseNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="GAMES.html">GAMES<span class="sr-only">(current)</span></a></li>
        <li><a href="APPS.html">APPS</a></li>
        <li><a href="TEMAS.html">TOPICS</a></li>
        <li><a href="CONTACTS.html">CONTACTS</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" method="post" action="buscar.php" name="form1">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre de aplicacion" name="txtaplicacion">
        </div>
        <button type="submit" class="btn btn-default" name="buscar"><strong>Buscar</strong></button>
      </form>
     <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><strong><img src="images/login.png" width="40px;" style="position:relative; margin-top: -5px; padding-left:5px; float: right">&nbsp;</strong></a></li>
     
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

 <img src="img/busq.png" width="45px" height="45px" style="position: absolute;margin-left:20px;margin-top: 16px"> <h1 style="margin-left:75px; position: absolute">Resultado de busqueda ....</h1>	
    
     <a href="mostrar.php" style="text-decoration:none; color: white; top: -50px"><label  for="activaventana" id="abremodal">LISTA DE APLICACIONES</label></a>  
     
	<hr>
<div class="resultado" align="center">




	<?php
	// incluir el archivo php
	include ("conexion1.php");
	// invocar a la funcion del archivo conexion.php
	$cn=fnconexion();
	$app=$_POST["txtaplicacion"];
	
	
	// consulta del vehiculo con sentencia sql
	$rs=@mysql_query("select* from aplicacion where nombre='$app'", $cn);
	$numero_filas =@mysql_num_rows($rs);
	
	if($numero_filas==0){
		echo "no se encontro la aplicacion";
	}else {
		
		echo "<br> ";
		echo "<span></span>".@mysql_result($rs,0,"nombre");
		echo "<br> ";
		$foto=@mysql_result($rs,0,"foto");
		$pagina=@mysql_result($rs,0,"pagina");
		echo "<br>";
		echo "<img src=images/buscar/$foto style='border: 1px solid rgba(131,129,129,1.00);border-radius: 5px; box-shadow: 5px 5px 5px #999; ' >";
		echo "<br>";
		echo "<br>";
		echo "<a href=$pagina class=' btn btn-danger' role= 'button' >Download APK</a>";
	}
	?>
	
	
</div>






<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
<br><br><br><br><br><br><br>
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2014-2017 APKPure. All rights reserved. | DMCA Disclaimer | Privacy Policy | Term of Use | Help translate APKPure</p>
      </div>
    </div>
  </div>
</footer>

</html>