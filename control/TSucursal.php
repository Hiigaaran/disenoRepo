<?php
require_once("../negocio/sucursal.php");
if(isset($_POST["id_suc"]) && $_POST["id_suc"]!="")
{ $id_suc=$_POST["id_suc"];}
if(isset($_POST["direccion"]) && $_POST["direccion"]!="")
{ $direccion=$_POST["direccion"];}
if(isset($_POST["ciudad"]) && $_POST["ciudad"]!="")
{ $ciudad=$_POST["ciudad"];}
if(isset($_POST["region"]) && $_POST["region"]!="")
{ $region=$_POST["region"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objSucursal= new Sucursal($id_suc, $direccion, $ciudad, $region);//Instancia
  $objSucursal->Sucursal($id_suc, $direccion, $ciudad, $region);
  $resul=$objSucursal->insertarSucursal();
  if($resul!="") header("Location:../Vision/View_Sucursal.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Sucursal.php'</script>";  
  }
  
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger insercion
  $objSucursal= new Sucursal($id_suc, $direccion, $ciudad, $region);//Instancia
  $objSucursal->Sucursal($id_suc, $direccion, $ciudad, $region);
  $resul=$objSucursal->modificarSucursal();
   if($resul!="") header("Location:../Vision/View_Sucursal.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Sucursal.php'</script>";  
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger insercion
  $objSucursal= new Sucursal($id_suc, $direccion, $ciudad, $region);//Instancia
  $objSucursal->setId_suc($id_suc);//a memoria
  $resul=$objSucursal->eliminarSucursal($id_suc);
   if($resul!="") header("Location:../Vision/View_Sucursal.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Sucursal.php'</script>";  
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger insercion
  $objSucursal= new Sucursal($id_suc);//Instancia
  $objSucursal->setId_suc($id_suc);//a memoria
  $vector=$objSucursal->buscarSucursal($id_suc);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger insercion
  $objSucursal= new Sucursal();//Instancia
  $matrix=$objSucursal->listarSucursal();
  return $matrix;
}

?>