<?php
require_once("../datos/Conexion.php");

class Sucursal {
    private $id_suc;
    private $direccion;
    private $ciudad;
    private $region;

    public function __contruct() {}

    public function Sucursal($id_suc, $direccion, $ciudad, $region) {
        $this->id_suc=$id_suc;
        $this->direccion=$direccion;
        $this->ciudad=$ciudad;
        $this->region=$region;
    }

    //GETTERS
    public function getDireccion() {
        return $this->direccion;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getRegion() {
        return $this->region;
    }

    public function getId_suc() {
        return $this->id_suc;
    }

    //SETTERS
    public function setDireccion($direccion) {
        $this->direccion=$direccion;
    }

    public function setCiudad($ciudad) {
        $this->ciudad=$ciudad;
    }

    public function setRegion($region) {
        $this->region=$region;
    }

    public function setId_suc($id_suc) {
        $this->id_suc=$id_suc;
    }

    //CRUD
	public function insertarSucursal() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO SUCURSAL VALUES('".$this->id_suc."','".$this->direccion."','".$this->ciudad."','".$this->region."')";
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function modificarSucursal() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE SUCURSAL SET ID_SUC='".$this->id_suc."',DIRECCION='".$this->direccion."',CIUDAD='".$this->ciudad."',REGION='".$this->region."' WHERE(ID_SUC='".$this->id_suc."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function eliminarSucursal($id_suc) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM SUCURSAL WHERE(ID_SUC='".$id_suc."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	//QUERY
	public function buscarSucursal($id_suc) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM SUCURSAL WHERE(ID_SUC='".$id_suc."')";	  
	    $vector=$objConex->ejecutarTransaccion($sql);	
	    return $vector;
	}

	public function listarSucursal() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM SUCURSAL";	  
	    $matrix=$objConex->ejecutarTransaccion($sql);	
	    return $matrix;
	}
}