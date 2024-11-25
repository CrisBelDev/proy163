<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VentaController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Venta_model');
        $this->load->model('Producto_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['Tventa'] = $this->Venta_model->mostrarDatos();
        $data['Tproducto'] = $this->Producto_model->mostrarDatos();
        // Cargar la vista productos
        $data['content'] = $this->load->view('venta', $data, true);

        // Cargar el layout con el contenido
        $this->load->view('layouts/main', $data);
    }

    public function buscarCliente() {
        // Obtener el C.I. del cliente desde el formulario
        $ci = $this->input->post('buscar_ci');
        
        // Buscar cliente en la base de datos usando el modelo
        $cliente = $this->Venta_model->buscarClienteModel($ci);
        
        // Pasar los datos del cliente a la vista
        $data['cliente'] = $cliente;
    
    
        // Cargar la vista de venta en el layout
        $data['content'] = $this->load->view('venta', $data, true);
        $this->load->view('layouts/main', $data);
    }
    

    public function guardar() {
        $nombre = $this->input->post('nombre');
        $paterno = $this->input->post('paterno');
        $materno = $this->input->post('materno');
        $ci = $this->input->post('ci');
        $nit = $this->input->post('nit');
        $this->Venta_model->guardarDatos($nombre, $paterno, $materno, $ci, $nit);
        redirect('cliente');
    }
    public function eliminar() {
        $id = $this->input->post('id');
        $this->Venta_model->eliminarRegistro($id);
        redirect('cliente');
    }



    public function editar() {
        $id = $this->input->post('id');
        $data["cliente"] = $this->Venta_model->idcliente($id);
        
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
        $this->Venta_model->updateCliente($id, $nombre, $paterno, $materno, $ci, $nit);
        redirect('cliente');
    }
}

                    
