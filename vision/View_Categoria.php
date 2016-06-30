<!DOCTYPE html>
<html>
	<?php
    include('Master.php');
    ?>
	<body>
		<div id="page-wrapper">
			<!--Trabajen Aqui!!--> 
 
  			<div class="jumbotron container-fluid" >
    		<div id="subviewPlaceHolder_id">
            <h1>Categorias en Sistema</h1>
    			 <div class="col-lg-6">
<<<<<<< Updated upstream
                <?php
				include('master.php');
                include("../datos/Conexion.php");
				$objConex= new Conexion();
 	 			$objConex->abrirConexion();
	 			$sql="SELECT * FROM CATEGORIA";
	 			$clie=mysql_query($sql) or die ("Problema en conexion  a Tabla Categoria");
				echo "<div class='table-responsive'>";
				echo "<table class='table table-hover table-striped'>";
				echo	"<thead>";
                echo           "<tr>";
                echo                "<th>Codigo</th>";
                echo                "<th>Nombre</th>";
                echo            "</tr>";
                echo        "</thead>";
                echo        "<tbody>";
                while($matrix=mysql_fetch_row($clie))
  			  { echo "<tr>";
   				echo "<td>".$matrix[0]."</td>";
				echo "<td>".$matrix[1]."</td>";			
				echo "</tr>";
  						}                       
                echo       "</tbody>";
                echo    "</table>";
                echo "</div>";
				?>
                
                    
                    
            </div>    
=======
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>/index.html</td>
                                <td>1265</td>                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
>>>>>>> Stashed changes
            </div>
  			</div>
  						<!--Trabajen Aqui!!-->  
    	</div>
    </body>
</html>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
