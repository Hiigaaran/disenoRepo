<!DOCTYPE html>
<html>
    <?php
        include('Master.php');
    ?>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de Inventario</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../bootstrap/css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../bootstrap/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>


    <body>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Perfil <small>Usuario Administrador</small>
                </h1>
                <ol class="breadcrumb">
                   <li>
                       <i class="fa fa-dashboard"></i>  <a href="Master.php">Master</a>
                   </li>
                   <li class="active">
                      <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;Gestion Usuarios
                  </li>
              </ol>
              <a class="btn btn-danger" href="#"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
              <!--AREA DE TRABAJO-->
              <?php 
              @include("../datos/Conexion.php");
              $objConex= new Conexion();
              $objConex->abrirConexion();
              $sql="SELECT * FROM USUARIO";
              $user=mysql_query($sql) or die ("Problema en conexion...Verifique");
echo "<html><center>";
echo "<form action='../control/TUsuario.php' method='post'>";
echo "<table class='gridtable' type='text/css' href='../MaquetaDashboard.css'>";
echo "<tr>";
echo "<th bgcolor=#6699FF>CODIGO</th><th bgcolor=#6699FF>NOMBRE</th><th bgcolor=#6699FF>VALOR</th><th bgcolor=#6699FF>STOCK</th></tr>";
//Llenado de tabla con datos de clientes
while($matrix=mysql_fetch_row($user))
{ echo "<tr>";
  echo "<td bgcolor=#6699FF>".$matrix[0]."</td>";
  echo "<td bgcolor=#6699FF>".$matrix[1]."</td>";
  echo "<td bgcolor=#6699FF>".$matrix[2]."</td>";
  echo "<td bgcolor=#6699FF>".$matrix[3]."</td>";  
  echo "</tr>";
};
//Cuadros de textos
echo "<tr>";
echo "<td><input type=text name=codigo></td>";
echo "<td><input type=text name=nombre></td>";
echo "<td><input type=text name=valor></td>";
echo "<td><input type=text name=stock></td>";
echo "</tr>";
echo "</table>";

//Botones de Accion
echo "<table>";
echo "<tr>";
echo "<td><input type=submit name=OK value='Insertar'></td>";
echo "<td><input type=submit name=OK1 value='Modificar'></td>";
echo "<td><input type=submit name=OK2 value='Eliminar'></td>";
echo "</tr>";
echo "</table>";
echo "</form></center></html>";
              ?>




              <!--FIN AREA DE TRABAJO-->
          </ul>
      </nav>



  </div>
</div>
<!-- /.row -->
</body>
</html>