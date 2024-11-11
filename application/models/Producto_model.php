<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

    function __construct() {

		parent::__construct();
        $this->load->database('datos');
	}
    public function guardarDatos($nombre, $descripcion, $precio, $stock){
        return $this->db->query("INSERT INTO producto (nombre, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', '$precio', '$stock')");

    }

    public function mostrarDatos()
	{
		return $this->db->query('select * from producto')->result();
	}

	public function eliminarRegistro($id)
	{
		$this->db->query("DELETE FROM producto WHERE id ='$id' ");
	}

	public function idproducto($id){
		return $this->db->query("SELECT * FROM producto WHERE id='$id' ")->result();
	}

	public function updateProducto($id, $nombre, $descripcion, $precio, $stock){
		return $this->db->query("UPDATE producto SET nombre='$nombre', descripcion = '$descripcion', precio ='$precio', stock = '$stock'  WHERE id = '$id'");
	}


}