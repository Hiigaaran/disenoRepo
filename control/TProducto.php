<?php
require_once("../negocio/producto.php");
if(isset($_POST["id_prod"]) && $_POST["id_prod"]!="")
{ $id_prod=$_POST["id_prod"];}
if(isset($_POST["nombre"]) && $_POST["nombre"]!="")
{ $nombre=$_POST["nombre"];}
if(isset($_POST["descripcion"]) && $_POST["descripcion"]!="")
{ $descripcion=$_POST["descripcion"];}
if(isset($_POST["stock"]) && $_POST["stock"]!="")
{ $stock=$_POST["stock"];}
if(isset($_POST["id_suc"]) && $_POST["id_suc"]!="")
{ $id_suc=$_POST["id_suc"];}
if(isset($_POST["id_cat"]) && $_POST["id_cat"]!="")
{ $id_cat=$_POST["id_cat"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objProductos= new Productos();//Instancia
  $objProductos->Productos($id_prod, $nombre, $descripcion, $stock, $id_suc, $id_cat);
  $resul=$objProductos->insertarProducto();
  if($resul!="") header("Location:../Vision/View_Producto.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Producto.php'</script>";  
  }
  
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger insercion
  $objProductos= new Productos();//Instancia
  $objProductos->Productos($id_prod, $nombre, $descripcion, $stock, $id_suc, $id_cat);
  $resul=$objProductos->modificarProducto();
   if($resul!="") header("Location:../Vision/View_Producto.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Producto.php'</script>";  
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger insercion
  $objProductos= new Productos();//Instancia
  $objProductos->setId_prod($id_prod);//a memoria
  $resul=$objProductos->eliminarProducto($id_prod);
   if($resul!="") header("Location:../Vision/View_Producto.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Producto.php'</script>";  
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger insercion
  $objProductos= new Productos();//Instancia
  $objProductos->setId_prod($id_prod);//a memoria
  $vector=$objProductos->buscarProducto($id_prod);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger insercion
  $objProductos= new Productos();//Instancia
  $matrix=$objProductos->listarProducto();
  return $matrix;
}

?>