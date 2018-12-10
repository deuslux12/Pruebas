<?php
require_once("myDBC.php");
if(isset($_SESSION['session']))
{
?>
<html>
 <head>
 <meta charset="UTF-8">
	<body bgcolor="#708090">
  <title>Pagina de mapas </title>
 </head>
 <body>
 <br><font face="Arial" size="+1" color="#FFFFFF" ><a href="salir.php"style="float:right" >Cerra Sesion</a></font></br>
<br> <font face="Arial" size="+1" color="#FF0000" ><a href="principal.php"style="float:right" >Regresar</a></font></br>
  <font size="20" face ="Snap ITC" color="blue">
  <center>	
			<header>
		<div class="header-top">
			<div class="navegacion">
				<input type="search" placeholder="Buscar . . ." id="inputBusqueda">
  </div></div></center>
<marquee behavior =alternate>Indique su ruta</marquee>
<center><img src="../imagenes/Plano Tec 2018.png"  ></center>
</header>
 </body>
 </html>
 <?php
}else
echo'<script type="text/javascript">
      alert("Registrarse para ver este contenido");
      window.location="http://localhost/sistema/index.php"
</script>';
?>