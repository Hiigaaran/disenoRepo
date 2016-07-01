<?php
require_once("../negocio/categoria.php");
if(isset($_POST["id_cat"]) && $_POST["id_cat"]!="")
{ $id_cat=$_POST["id_cat"];}
if(isset($_POST["nombre"]) && $_POST["nombre"]!="")
{ $nombre=$_POST["nombre"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objCategoria= new Categoria($id_cat, $nombre);//Instancia
  $objCategoria->Categoria($id_cat, $nombre);
  $resul=$objCategoria->insertarCategoria();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Categoria.php'</script>";  
  }
  
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger insercion
  $objCategoria= new Categoria($id_cat, $nombre);//Instancia
  $objCategoria->Categoria($id_cat, $nombre);
  $resul=$objCategoria->modificarCategoria();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Categoria.php'</script>";  
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger insercion
  $objCategoria= new Categoria($id_cat, $nombre);//Instancia
  $objCategoria->setId_cat($id_cat);//a memoria
  $resul=$objCategoria->eliminarCategoria($id_cat);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else 
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../Vision/View_Categoria.php'</script>";  
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger insercion
  $objCategoria= new Categoria($id_cat, $nombre);//Instancia
  $objCategoria->setId_cat($id_cat);//a memoria
  $vector=$objCategoria->buscarCategoria($id_cat);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger insercion
  $objCategoria= new Categoria($id_cat, $nombre);//Instancia
  $matrix=$objCategoria->listarCategoria();
  return $matrix;
}

?>