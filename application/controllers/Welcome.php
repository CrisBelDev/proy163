<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Datos');
        $this->load->helper('url');
    }

    public function index() {
        $data['datos'] = $this->Datos->mostrarDatos();
        
        // Cargar la vista 'welcome_message' y pasarla como contenido
        $data['content'] = $this->load->view('welcome_message', $data, true);
        
        // Cargar el layout con el contenido
        $this->load->view('layouts/main', $data);
    }

    public function guardar() {
        $nombre = $this->input->post('nombre');
        $paterno = $this->input->post('paterno');
        $this->Datos->guardarDatos($nombre, $paterno);
        redirect('/');
    }

    public function eliminar() {
        $id = $this->input->post('id');
        $this->Datos->eliminarRegistro($id);
        redirect('/');
    }

    public function editar() {
        $id = $this->input->post('id');
        $data["alumno"] = $this->Datos->idUsuario($id);
        
        // Cargar la vista 'editar' y pasarla como contenido
        $data['content'] = $this->load->view('editar', $data, true);
        
        // Cargar el layout con el contenido
        $this->load->view('layouts/main', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $paterno = $this->input->post('paterno');
        $this->Datos->updateUsuario($id, $nombre, $paterno);
        redirect('/');
    }
}
