<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Model {

	function __construct() {

		parent::__construct();
        $this->load->database('datos');
	}
    //funcion para guardar datos
    public function guardarDatos($nombre, $paterno){
        return $this->db->query("INSERT INTO alumno(nombre, paterno) VALUES ('$nombre', '$paterno')");

    }
	
	public function mostrarDatos()
	{
		return $this->db->query('select * from alumno')->result();
	}

	public function eliminarRegistro($id)
	{
		$this->db->query("DELETE FROM alumno WHERE id ='$id' ");
	}

	public function idUsuario($id){
		return $this->db->query("SELECT * FROM alumno WHERE id='$id' ")->result();
	}

	public function updateUsuario($id, $nombre, $paterno){
		return $this->db->query("UPDATE alumno SET nombre='$nombre', paterno = '$paterno'  WHERE id = '$id'");
	}
	











	function ejecuta_sql($sql) {
		return $this->db->query($sql);
	}
	
	function obtiene_alumno($id) {
		$this->db->where("id", $id);
		return $this->db->get("alumno");
	}

}