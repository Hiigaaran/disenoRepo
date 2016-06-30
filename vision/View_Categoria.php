<!DOCTYPE html>
<html>
	
	<body>
		<div id="page-wrapper">
			<!--Trabajen Aqui!!-->  
  			<div class="jumbotron">
    			<h1>Categorias en Sistema</h1>
    			
  			</div>
  						<!--Trabajen Aqui!!-->  
    	</div>
    </body>
</html>

<?php
	include('master.php');
	include("../datos/Conexion.php");
	 $objConex= new Conexion();
 	 $objConex=abrirConexion();
	 $sql="SELECT * FROM CATEGORIA";
	 $clie=mysql_query($sql) or die ("Problema en conexion  a Tabla Cliente");
	 
?>