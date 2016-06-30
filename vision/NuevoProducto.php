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
                    <a class="navbar-brand" href="index.html">Sistema de Inventario</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <!---->
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
                        <li>
                            <a href="Master.php"><i class="fa fa-fw fa-dashboard"></i> Master</a>
                        </li>
                        <li class="active">
                            <a href="NuevoProducto.php"><i class="fa fa-fw fa-bar-chart-o"></i> Nuevo Producto</a>
                        </li>
                        <li>
                            <a href="Reportes.php"><i class="fa fa-fw fa-table"></i> Reportes</a>
                        </li>
                        <li>
                            <a href="Movimientos.php"><i class="fa fa-fw fa-edit"></i> Movimientos</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Nuevo Producto
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.html">Master</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-bar-chart-o"></i> Nuevo Producto
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../bootstrap/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../bootstrap/js/plugins/morris/raphael.min.js"></script>
        <script src="../bootstrap/js/plugins/morris/morris.min.js"></script>
        <script src="../bootstrap/js/plugins/morris/morris-data.js"></script>

        <!-- Flot Charts JavaScript -->
        <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
        <script src="../bootstrap/js/plugins/flot/jquery.flot.js"></script>
        <script src="../bootstrap/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../bootstrap/js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="../bootstrap/js/plugins/flot/jquery.flot.pie.js"></script>
        <script src="../bootstrap/js/plugins/flot/flot-data.js"></script>
    </body>
</html>
