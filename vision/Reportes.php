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
                        <li>
                            <a href="Master.php"><i class="fa fa-fw fa-dashboard"></i> Master</a>
                        </li>
                        <li>
                            <a href="NuevoProducto.php"><i class="fa fa-fw fa-bar-chart-o"></i> Nuevo Producto</a>
                        </li>
                        <li class="active">
                            <a href="Reportes.php"><i class="fa fa-fw fa-table"></i> Reportes</a>
                        </li>
                        <li>
                            <a href="Movimientos.php"><i class="fa fa-fw fa-edit"></i> Movimientos</a>
                        </li>
                              <li >
                            <a href="GUI_Usuarios.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp;Gestion Usuarios</a>
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
                                Tables
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-table"></i> Tables
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Bordered Table</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2>Bordered with Striped Rows</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Basic Table</h2>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2>Striped Rows</h2>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Contextual Classes</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active">
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr class="success">
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2>Bootstrap Docs</h2>
                            <p>For complete documentation, please visit <a target="_blank" href="http://getbootstrap.com/css/#tables">Bootstrap's Tables Documentation</a>.</p>
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
    </body>
</html>
