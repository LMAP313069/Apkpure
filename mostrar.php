<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Mostrar Lista de Aplicaciones</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="stilotabla.css">

</head>

<body>


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
        <li><a href="login.html"><strong>LOGIN</strong></a></li>
     
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

	<table class="tabla">
<caption align="center">Lista de Aplicaciones</caption> 
	<!--Cabezera de la tabla-->
	<thead>
		<tr>
		<!-- Titulo de las columnas-->
			<th>Nombre</th>
			<th>Categoria</th>
			<th>Versión</th>
			<th>S. Operativo</th>
			<th>Icono</th>
		</tr>
	</thead>
	<!--Cuerpo de la Tabla-->
	<tbody>
	
	<?php
	
	include("conexion.php");
		$cn=fnconexion();
	

	
	
	
	
	$sqlselect="SELECT * FROM aplicacion";		
	$rs = $cn -> query($sqlselect);
		
	// $rs=@mysql_query($sqlselect,$cn);
	

	
//	echo "Dni  "."  Nombre "." Edad"." Sexo"." Sueldo"." F.Registro"."<br>";
	
	//if($rs>0)
	
		while($row =$rs->fetch_assoc()){
		//	echo $row[0]."  ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]."<br>";
		
		
	?>
	
		<tr>
			<td><?php echo $row['nombre'] ?></td>
			<td><?php echo $row['categoria'] ?></td>
			<td><?php echo $row['version'] ?></td>
			<td><?php echo $row['sistemaO'] ?></td>
			<td> <img src=images/buscar/<?php  echo $row['foto'] ?> style='border: 1px solid rgba(131,129,129,1.00);border-radius: 5px; box-shadow: 5px 5px 5px rgba(170,173,176,1.00); ' ></td>
			
		</tr>
		
		<?php } ?>

		
	</tbody>
</table>



</body>
<br>
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