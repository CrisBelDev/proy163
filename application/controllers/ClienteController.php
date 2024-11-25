<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['Tcliente'] = $this->Cliente_model->mostrarDatos();
        // Cargar la vista productos
        $data['content'] = $this->load->view('cliente', $data, true);

        // Cargar el layout con el contenido
        $this->load->view('layouts/main', $data);
    }
    public function guardar() {
        $nombre = $this->input->post('nombre');
        $paterno = $this->input->post('paterno');
        $materno = $this->input->post('materno');
        $ci = $this->input->post('ci');
        $nit = $this->input->post('nit');
        $this->Cliente_model->guardarDatos($nombre, $paterno, $materno, $ci, $nit);
        redirect('cliente');
    }
    public function eliminar() {
        $id = $this->input->post('id');
        $this->Cliente_model->eliminarRegistro($id);
        redirect('cliente');
    }



    public function editar() {
        $id = $this->input->post('id');
        $data["cliente"] = $this->Cliente_model->idcliente($id);
        
        // Cargar la vista 'editar' y pasarla como contenido
        $data['content'] = $this->load->view('editarCliente', $data, true);
        
        // Cargar el layout con el contenido
        $this->load->view('layouts/main', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $paterno = $this->input->post('paterno');
        $materno = $this->input->post('materno');
        $ci = $this->input->post('ci');
        $nit = $this->input->post('nit');
        $this->Cliente_model->updateCliente($id, $nombre, $paterno, $materno, $ci, $nit);
        redirect('cliente');
    }
}

                    
