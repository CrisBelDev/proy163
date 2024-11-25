<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    function __construct() {

		parent::__construct();
        $this->load->database('datos');
	}
    public function guardarDatos($nombre, $paterno, $materno, $ci, $nit){
        return $this->db->query("INSERT INTO cliente (nombre, paterno, materno, ci, nit) VALUES ('$nombre', '$paterno', '$materno', '$ci', '$nit')");

    }

    public function mostrarDatos()
	{
		return $this->db->query('select * from cliente')->result();
	}

	public function eliminarRegistro($id)
	{
		$this->db->query("DELETE FROM cliente WHERE id ='$id' ");
	}

	public function idcliente($id){
		return $this->db->query("SELECT * FROM cliente WHERE id='$id' ")->result();
	}

	public function updateCliente($id, $nombre, $paterno, $materno, $ci, $nit){
		return $this->db->query("UPDATE cliente SET nombre='$nombre', paterno = '$paterno', materno ='$materno', ci = '$ci', nit = '$nit'  WHERE id = '$id'");
	}
    
    

}