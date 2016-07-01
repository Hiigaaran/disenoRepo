<link href="maquetaLogin.css" type="text/css" rel="stylesheet"/>
<script src="jscriptLogin.js"></script>
<meta charset="utf-8" />
  <div class="login-page">
  <div class="form">
    <img src="imagenes/unreal_logo.gif" width="171" height="34">
    </br>
    </br>
      <form action="index.php" method="post">
      <input type="text" placeholder="Nombre Usuario" name=usuario/>
      <input type="password" placeholder="Contraseña" name=clave/>
      <button type="submit" name=OK onClick="OK">Entrar</button>
      <!--<input type="submit" value="ENTRAR" name=OK/>-->
    </form>
  </div>
</div>
<?php
  session_start();

  if(isset($_POST["usuario"]) && $_POST["usuario"]!="") 
  { $usuario=$_POST["usuario"];}
  if(isset($_POST["clave"]) && $_POST["clave"]!="")
  { $clave=$_POST["clave"];}

  if(isset($_POST["OK"]) && $_POST["OK"]=="Autenticar")
  {    //Llenado de datos de clientes
    require_once("../datos/Conexion.php");
    $objConex= new Conexion();
    $objConex->abrirConexion();
    $sql="SELECT * FROM USUARIO WHERE USER='".$usuario."' AND PASS='".$clave."'";
    $cuenta=mysql_query($sql) or die ("Problema en conexion...Verifique");
    while($datos=mysql_fetch_row($cuenta))
    {  $usu=$datos[3];
       $cla=$datos[4];
       $per=$datos[1]; 
    }
    if($usu==$usuario && $cla==$clave)
       { header("Location:../vision/Movimientos.php");}
    else
       { echo "USUARIO NO VALIDO...";}

    $_SESSION["info-usuario"]=$per;
		
}  

?>