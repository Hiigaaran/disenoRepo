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
                    Gestion Usuarios
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="Master.php">Master</a>
                    </li>
                    <li>
                        <i class="fa fa-edit"></i><a href="View_Usuarios.php"> Gestión Usuarios</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Agregar Usuarios
                    </li>
                </ol>
                <h1>Ingreso Usuario Nuevo</h1>
                <form action="../control/Tusuario.php" method="post">
                    <div id=formCRUD class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td><input type=text class="form-control" name=rut placeholder="Rut" required ></td>
                            <td><input type=text class="form-control" name=nombre placeholder="Nombre" required></td>
                            <td><input type=text class="form-control" name=apel placeholder="Apellido" required ></td>
                            <td><input type=text class="form-control" name=user placeholder="Usuario" required ></td>
                            <td><input type=text class="form-control" name=pass placeholder="Contraseña" required ></td>
                            <td><div class="btn-group" role="group">
                                    <input type=submit class="btn btn-default" name=OK value="Insertar" >
                                </div></td>
                        </tr>
                    </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
