<?php
require_once("../datos/Conexion.php");

class Usuario {
    private $rut;
	private $nombre;
	private $apel;
	private $user;
	private $pass;
	
	public function __construct() {}
	
	public function Usuario($rut, $nombre,$apel,$user,$pass) { 
        $this->rut=$rut;
	    $this->nombre=$nombre;
	    $this->apel=$apel;
	    $this->user=$user;
	    $this->pass=$pass;	
	}
	//GETTERS
	public function getRut() {
        return $this->rut;
    }
	public function getNombre() {
        return $this->nombre;
    }
	public function getApel() {
        return $this->apel;
    }
	public function getUser() {
        return $this->user;
    }
	public function getPass() {
        return $this->pass;
    }
	//SETTERS
	public function setRut($rut) {
        $this->rut=$rut;
    }
	public function setNombre($nombre) {
        $this->nombre=$nombre;
    }
	public function setApel($apel) {
        $this->apel=$apel;
    }	
	public function setUser($user) {
        $this->user=$user;
    }
	public function setPass($pass) {
        $this->pass=$pass;
    }
	
	//CRUD
	public function insertarUsuario() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO USUARIO VALUES('".$this->rut."','".$this->nombre."','".$this->apel."','".$this->user."','".$this->pass."')";
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function modificarUsuario() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE USUARIO SET NOMBRE='".$this->nombre."',APEL='".$this->apel."',USER='".$this->user."',PASS='".$this->pass."' WHERE(RUT='".$this->rut."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function eliminarUsuario($rut) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM USUARIO WHERE(RUT='".$rut."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	//QUERY
	public function buscarUsuario($rut) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM USUARIO WHERE(RUT='".$rut."')";	  
	    $vector=$objConex->ejecutarTransaccion($sql);	
	    return $vector;
	}

	public function listarUsuario() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM USUARIO";	  
	    $matrix=$objConex->ejecutarTransaccion($sql);	
	    return $matrix;
	}

}

?>