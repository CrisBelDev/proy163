<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['Tproducto'] = $this->Producto_model->mostrarDatos();
        // Cargar la vista productos
        $data['content'] = $this->load->view('productos', $data, true);

        // Cargar el layout con el contenido
        $this->load->view('layouts/main', $data);
    }
    public function guardar() {
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $precio = $this->input->post('precio');
        $stock = $this->input->post('stock');
        $this->Producto_model->guardarDatos($nombre, $descripcion, $precio, $stock);
        redirect('productos');
    }
    public function eliminar() {
        $id = $this->input->post('id');
        $this->Producto_model->eliminarRegistro($id);
        redirect('productos');
    }



    public function editar() {
        $id = $this->input->post('id');
        $data["producto"] = $this->Producto_model->idproducto($id);
        
        // Cargar la vista 'editar' y pasarla como contenido
        $data['content'] = $this->load->view('editarProducto', $data, true);
        
        // Cargar el layout con el contenido
        $this->load->view('layouts/main', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $precio = $this->input->post('precio');
        $stock = $this->input->post('stock');
        $this->Producto_model->updateProducto($id, $nombre, $descripcion, $precio, $stock);
        redirect('productos');
    }
}

                    
