<!DOCTYPE html>
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
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Master.php">Sistema de Inventario</a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="active">
            <a href="Master.php"><i class="fa fa-fw fa-dashboard"></i> Master</a>
          </li>
          <li>
            <a href="NuevoProducto.php"><i class="fa fa-fw fa-bar-chart-o"></i> Gestion Productos</a>
          </li>
          <li>
            <a href="Reportes.php"><i class="fa fa-fw fa-table"></i> Reportes</a>
          </li>
          <li>
            <a href="Movimientos.php"><i class="fa fa-fw fa-edit"></i> Movimientos</a>
          </li>
          <li>
            <a href="View_categoria.php"><i class="fa fa-calculator fa-edit"></i> Categorias</a>
          </li>
          <li>
            <a href="NuevaCategoria.php"><i class="fa fa-calculator fa-edit"></i> Mantenedor Categorias</a>
          </li>
        <!-- Custom Fonts -->
        <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Master.php">Sistema de Inventario</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="Master.php"><i class="fa fa-fw fa-dashboard"></i> Master</a>
                        </li>
                        <li>
                            <a href="NuevoProducto.php"><i class="fa fa-fw fa-bar-chart-o"></i> Nuevo Producto</a>
                        </li>
                        <li>
                            <a href="Reportes.php"><i class="fa fa-fw fa-table"></i> Reportes</a>
                        </li>
                        <li>
                            <a href="Movimientos.php"><i class="fa fa-fw fa-edit"></i> Movimientos</a>
                        </li>
                        <li>
                            <a href="View_categoria.php"><i class="fa fa-calculator fa-edit"></i> Categorias</a>
                        </li>
                        <li>
                            <a href="NuevaCategoria.php"><i class="fa fa-calculator fa-edit"></i> Mantenedor Categorias</a>
                        </li>
                        
                        <li >
                            <a href="View_Usuarios.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;Gestion Usuarios</a>
                        </li>
                        <li >
                            <a href="View_Sucursal.php"><i class="fa fa-fw fa-bar-chart-o" aria-hidden="true"></i>&nbsp;Sucursales</a>
                        </li>
                        <li>
                            <a href="NuevaSucursal.php"><i class="fa fa-fw fa-bar-chart-o" aria-hidden="true"></i> Mantenedor Sucursales</a>
                        </li>
                    </ul>
                </div>
            </nav>

          <!--<li >
          <a href="View_Usuarios.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;Gestion Usuarios</a>
        </li>-->
        <li class="treeview">
          <a href="View_Usuarios.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;Gestion Usuarios
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="NuevoUsuario.php"><i class="fa fa-circle-o"></i> Nuevo Usuario</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="NuevoUsuario.php"><i class="fa fa-circle-o"></i> Manten Usuario</a></li>
          </ul>
        </li>
        <li >
          <a href="View_Sucursal.php"><i class="fa fa-fw fa-bar-chart-o" aria-hidden="true"></i>&nbsp;Gestión de Sucursales</a>
        </li>

      </ul>
    </div>
  </nav>

  <div id="page-wrapper">
    <div class="container-fluid">
      <div id="subviewPlaceHolder_id">


        <div id="page-wrapper">
          <div class="container-fluid">
            <div id="subviewPlaceHolder_id">
            </div>

          </div>

          <!-- jQuery -->
          <script src="../bootstrap/js/jquery.js"></script>

          <!-- Bootstrap Core JavaScript -->
          <script src="../bootstrap/js/bootstrap.min.js"></script>

          <!-- Morris Charts JavaScript -->
          <script src="../bootstrap/js/plugins/morris/raphael.min.js"></script>
          <script src="../bootstrap/js/plugins/morris/morris.min.js"></script>
          <script src="../bootstrap/js/plugins/morris/morris-data.js"></script>
        </body>
        </html>
