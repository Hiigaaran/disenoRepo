<?php
require_once("../negocio/usuario.php");
if(isset($_POST["rut"]) && $_POST["rut"]!="")
{ $rut_user=$_POST["rut"];}

if(isset($_POST["nombre"]) && $_POST["nombre"]!="")
{ $nomb_user=$_POST["nombre"];}


if(isset($_POST["apel"]) && $_POST["apel"]!="")
{ $apel_user=$_POST["apel"];}


if(isset($_POST["user"]) && $_POST["user"]!="")
{ $usuario=$_POST["user"];}

if(isset($_POST["pass"]) && $_POST["pass"]!="")
{ $password=$_POST["pass"];}


//insertar usuario
if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objUsuario= new Usuario();//Instancia
  $objUsuario->Usuario($rut_user, $nomb_user, $apel_user, $usuario,$password);
  $resul=$objUsuario->insertarUsuario();
  if($resul!="") header("Location:../vision/View_Usuarios.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/View_Usuarios.php'</script>";
  }

}

//Modificar Usuario
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger insercion
  $objUsuario= new Usuario();//Instancia
  $objUsuario->Usuario($rut_user, $nomb_user, $apel_user, $usuario,$password);
  $resul=$objUsuario->modificarUsuario();
   if($resul!="") header("Location:../vision/View_Usuarios.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/View_Usuarios.php'</script>";
  }
}

//Eliminar Usuario
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger insercion
  $objUsuario= new Usuario();//Instancia
  $objUsuario->setRut($rut_user,  $nomb_user, $apel_user, $usuario,$password);//a memoria
  $resul=$objUsuario->eliminarUsuario($rut_user);
   if($resul!="") header("Location:../vision/View_Usuarios.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/View_Usuarios.php'</script>";
  }
}

//buscar Usuario
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger insercion
  $objUsuario= new Usuario();//Instancia
  $objUsuario->setRut($rut_user, $nomb_user, $apel_user, $usuario,$password);//a memoria
  $vector=$objUsuario->buscarUsuario($rut_user);
  return $vector;
}

//ListarUsuario
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger insercion
  $objUsuario= new Usuario();//Instancia
  $matrix=$objUsuario->listarUsuario();
  return $matrix;
}

?>
