<!DOCTYPE html>
<html>
  <?php
  include('master.php');
	include("../Datos/Conexion.php");

  ?>
<body>

	<!--Trabajen Aqui!!-->

      <?php

		echo "<div id='page-wrapper'>";
		echo "<div class='container-fluid' >";
		echo "<div id='subviewPlaceHolder_id'>";
		echo "<h2 class='page-header'>Gestión de Sucursales</h2>";
		echo "<ol class='breadcrumb'><li><i class='fa fa-dashboard'></i>  <a href='master.php'>Inicio					                      </a>
              	</li>
              	<li class='active'>
                  	<i class='fa fa-calculator'></i> Sucursales
		    	</li>
          	 </ol>";
		echo "<div class='col-lg-6'>";



		$objConex= new Conexion();
	 		$objConex->abrirConexion();
 		$sql="SELECT * FROM sucursal";
 		$cat=mysql_query($sql) or die ("Problema en conexion  a Tabla Sucursal");
		echo "<html><center>";
		echo "<h2>Listado de Sucursales en sistema</h2>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-bordered table-hover table-striped'>";
		echo	"<thead>";
          echo    	"<tr>";
          echo			"<th>Id Sucursal</th>";
          echo            "<th>Dirección</th>";
          echo            "<th>Ciudad</th>";
          echo            "<th>Región</th>";
          echo         "</tr>";
          echo    "</thead>";
          echo  "<tbody>";
          while($matrix=mysql_fetch_row($cat))
  		{ echo "<tr>";
 			  echo "<td>".$matrix[0]."</td>";
		  echo "<td>".$matrix[1]."</td>";
		  echo "<td>".$matrix[2]."</td>";
		  echo "<td>".$matrix[3]."</td>";
		  echo "</tr>";
			}
          echo       "</tbody>";
          echo    "</table>";
          echo "</div>";
		echo "</html>";
	?>


		<!--Trabajen Aqui!!-->
  </body>
</html>
