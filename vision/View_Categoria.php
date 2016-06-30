<!DOCTYPE html>
<html>
	
	<body>
		<div id="page-wrapper">
			<!--Trabajen Aqui!!-->  
  			<div class="jumbotron">
    			<h1>Categorias en Sistema</h1>
    			 <div class="col-lg-6">
                
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
            </div>
  			</div>
  						<!--Trabajen Aqui!!-->  
    	</div>
    </body>
</html>

<?php
	include('master.php');
	include("../datos/Conexion.php");
	 $objConex= new Conexion();
 	 $objConex->abrirConexion();
	 $sql="SELECT * FROM CATEGORIA";
	 $clie=mysql_query($sql) or die ("Problema en conexion  a Tabla Cliente");
	 
?>