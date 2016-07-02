<!DOCTYPE html>
<html>
<?php
include('Master.php');
include("../datos/Conexion.php");
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
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"> Gestion de Usuarios</h1>
      <ol class="breadcrumb">
        <li>
          <i class="fa fa-dashboard"></i>  <a href="Master.php">Master</a>
        </li>
        <li class="active">
          <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;Gestion Usuarios</li>
        </ol>
        <!--AREADETRABAJO-->
        <!--Agregar Usuario link-->
          <li><a href="NuevoUsuario.php"><i class="fa fa-circle-o"></i> <span> Aregar Usuario</span></a></li>
          <li><a href="MostrarUsuarios.php"><i class="fa fa-circle-o"></i> <span> Mostrar Usuarios</span></a></li>
          <!--FINAREADETRABAJO-->
        </ul>
      </nav>
    </div>
  </div>
</body>
</html>
