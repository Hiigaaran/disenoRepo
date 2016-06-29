<?php
require_once("../datos/Conexion.php");

class Categoria {
    private $id_cat;
    private $nombre;

    public function __contruct() {}

    public function Categoria($id_cat, $nombre) {
        $this->id_cat=$id_cat;
        $this->nombre=$nombre;
    }

    //GETTERS
    public function getId_cat() {
        return $this->id_cat;
    }

    public function getNombre() {
        return $this->nombre;
    }

    //SETTERS
    public function setId_cat($id_cat) {
        $this->id_cat=$id_cat;
    }

    public function setNombre($nombre) {
        $this->nombre=$nombre;
    }

    //CRUD
	public function insertarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO CATEGORIA VALUES('".$this->id_cat."','".$this->nombre."')";
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function modificarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE CATEGORIA SET ID_CAT='".$this->id_cat."',NOMBRE='".$this->nombre."' WHERE(ID_CAT='".$this->id_cat."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function eliminarCategoria($id_cat) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM CATEGORIA WHERE(ID_CAT='".$id_cat."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	//QUERY
	public function buscarCategoria($id_cat) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM CATEGORIA WHERE(ID_CAT='".$id_cat."')";	  
	    $vector=$objConex->ejecutarTransaccion($sql);	
	    return $vector;
	}

	public function listarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM CATEGORIA";	  
	    $matrix=$objConex->ejecutarTransaccion($sql);	
	    return $matrix;
	}
}