<?php
require_once("../datos/Conexion.php");

class Productos {
    private $id_prod;
    private $nombre;
    private $descripcion;
    private $stock;
    private $id_suc;
    private $id_cat;

    public function __contruct() {}

    public function Cliente($id_prod, $nombre, $descripcion, $stock, $id_suc, $id_cat) {
        $this->id_prod=$id_prod;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->stock=$stock;
        $this->id_suc=$id_suc;
        $this->id_cat=$id_cat;
    }

    //GETTERS
    public function getId_prod() {
        return $this->id_prod;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getId_suc() {
        return $this->id_suc;
    }

    public function getId_cat() {
        return $this->id_cat;
    }

    //SETTERS
    public function setId_prod($id_prod) {
        $this->id_prod=$id_prod;
    }

    public function setNombre($nombre) {
        $this->nombre=$nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion=$descripcion;
    }

    public function setStock($stock) {
        $this->stock=$stock;
    }

    public function setId_suc($id_suc) {
        $this->id_suc=$id_suc;
    }

    public function setId_cat($id_cat) {
        $this->id_cat=$id_cat;
    }

    //CRUD
	public function insertarProducto() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO PRODUCTOS VALUES('".$this->id_prod."','".$this->nombre."','".$this->descripcion."','".$this->stock."','".$this->id_suc."','".$this->id_cat."')";
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function modificarProducto() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE PRODUCTOS SET ID_PROD='".$this->id_prod."',NOMBRE='".$this->nombre."',DESCRIPCION='".$this->descripcion."',STOCK='".$this->stock."',ID_SUC='".$this->id_suc."',ID_CAT='".$this->id_cat."' WHERE(ID_PROD='".$this->id_prod."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function eliminarProducto($rut) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM PRODUCTOS WHERE(ID_PROD='".$id_prod."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	//QUERY
	public function buscarProducto($id_prod) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM PRODUCTOS WHERE(ID_PROD='".$id_prod."')";	  
	    $vector=$objConex->ejecutarTransaccion($sql);	
	    return $vector;
	}

	public function listarProducto() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM PRODUCTOS";	  
	    $matrix=$objConex->ejecutarTransaccion($sql);	
	    return $matrix;
	}
}