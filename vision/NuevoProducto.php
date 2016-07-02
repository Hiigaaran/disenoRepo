<!DOCTYPE html>
<meta charset="utf-8" />
<html>
    <?php
        include('Master.php');
        include('../datos/Conexion.php');
    ?>
    <body>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Productos
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="Master.php">Master</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Gestión Productos
                    </li>
                </ol>
                <h1>Gestión Unificada de Productos</h1>
                <form action="../control/TProducto.php" method="post">
                    <div id=formCRUD class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td><input type=text class="form-control" name=id_prod placeholder="Id Producto"></td>
                            <td><input type=text class="form-control" name=nombre placeholder="Nombre Producto"></td>
                            <td><input type=text class="form-control" name=descripcion placeholder="Descripcion"></td>
                            <td><input type=text class="form-control" name=stock placeholder="Stock Producto"></td>
                            <td><input type=text class="form-control" name=id_suc placeholder="Id Sucursal"></td>
                            <td><input type=text class="form-control" name=id_cat placeholder="Id Categoria"></td>
                            <td><div class="btn-group" role="group">
                                    <input type=submit class="btn btn-default" name=OK value="Insertar">
                                    <input type=submit class="btn btn-default" name=OK1 value="Modificar">
                                    <input type=submit class="btn btn-default" name=OK2 value="Eliminar">
                                </div></td>
                        </tr>
                    </table>
                    </div>
                </form>
                <h1>Detalle de Productos</h1>
                <div id=tablaDatos>
<<<<<<< HEAD
                    <?php
			            $objConex= new Conexion();
 	 		            $objConex->abrirConexion();
	 		            $sql="SELECT * FROM productos";
	 		            $cat=mysql_query($sql) or die ("Problema en conexion  a Tabla Categoria");
			            echo "<div class='table-responsive'>";
			            echo "<table class='table table-hover table-striped'>";
			            echo	"<thead>";
                        echo           "<tr>";
                        echo                "<th>Codigo</th>";
                        echo                "<th>Nombre</th>";
                        echo                "<th>Descripción</th>";
                        echo                "<th>Stock</th>";
                        echo                "<th>Id Sucursal</th>";
                        echo                "<th>Id Categoria</th>";
                        echo            "</tr>";
                        echo        "</thead>";
                        echo        "<tbody>";
                        while($matrix=mysql_fetch_row($cat))
    		            {   echo "<tr>";
   			                echo "<td>".$matrix[0]."</td>";
			                echo "<td>".$matrix[1]."</td>";
                            echo "<td>".$matrix[2]."</td>";
                            echo "<td>".$matrix[3]."</td>";
                            echo "<td>".$matrix[4]."</td>";
                            echo "<td>".$matrix[5]."</td>";			
			                echo "</tr>";
  			            }                       
                        echo       "</tbody>";
                        echo    "</table>";
                        echo "</div>";
			            echo "</html>";
		            ?>
=======

>>>>>>> 79681fee9742f47a9d18d92dcf1718ce959d2428
                </div>
            </div>
        </div>
    </body>
</html>
