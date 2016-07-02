<!DOCTYPE html>
<meta charset="utf-8" />
<html>
<?php
include('Master.php');
include('../datos/Conexion.php');
?>
<body>
  <!-- Page Heading -->
  <?php
  echo "<div id='page-wrapper'>";
  echo "<div class='container-fluid' >";
  echo "<div id='subviewPlaceHolder_id'>";
  echo "<h2 class='page-header'>Categorias en Sistema</h2>";
  echo "<div class='col-lg-6'>";
  echo "<ol class='breadcrumb'><li><i class='fa fa-dashboard'></i>  <a href='Master.html'>Master</a>
  </li>
  <li >
  <i class='fa fa-calculator'></i><a href='View_Usuarios.php'> Gestion Usuarios</a>
  </li>
  <li class='active'>
  <i class='fa fa-calculator'></i> Listado Usuarios
  </li>
  </ol>";
  $objConex= new Conexion();
  $objConex->abrirConexion();
  $sql="SELECT * FROM usuario";
  $cat=mysql_query($sql) or die ("Problema en conexion  a Tabla Usuarios");
  echo "<html><center>";
  echo "<div class='table-responsive'>";
  echo "<table class='table table-hover table-striped'>";
  echo	"<thead>";
  echo           "<tr>";
  echo                "<th>Rut</th>";
  echo                "<th>Nombre</th>";
    echo                "<th>apellido</th>";
      echo                "<th>Usuario</th>";
        echo                "<th>Contraseña</th>";
  echo            "</tr>";
  echo        "</thead>";
  echo        "<tbody>";
  while($matrix=mysql_fetch_row($cat))
  { echo "<tr>";
    echo "<td>".$matrix[0]."</td>";
    echo "<td>".$matrix[1]."</td>";
      echo "<td>".$matrix[2]."</td>";
        echo "<td>".$matrix[3]."</td>";
          echo "<td>".$matrix[4]."</td>";
    echo "</tr>";
  }

  echo "<td><input type=text name=rut ></td>";
  echo "<td><input type=submit name=OK1 value='Modificar'></td>";
  echo "<td><input type=submit name=OK2 value='Eliminar'></td>";
  echo       "</tbody>";
  echo    "</table>";

  echo "</div>";
  echo "</html>";
  ?>

</body>
</html>
