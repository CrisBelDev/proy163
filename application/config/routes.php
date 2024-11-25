<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['guardar'] = 'Welcome/guardar';
$route['eliminar'] = 'Welcome/eliminar';
$route['editar'] = 'Welcome/editar';
$route['update'] = 'Welcome/update';


// Rutas de CRUD para productos
$route['productos'] = 'Productos/index';  // Mostrar la lista de productos
$route['guardar_producto'] = 'Productos/guardar'; 
$route['editarProducto'] = 'Productos/editar';
$route['updateProducto'] = 'Productos/update';
$route['eliminarProducto'] = 'Productos/eliminar';


// rutas del cliente
$route['cliente'] = 'ClienteController/index';
$route['guardar_cliente'] = 'ClienteController/guardar'; 
$route['editarCliente'] = 'ClienteController/editar';
$route['updateCliente'] = 'ClienteController/update';
$route['eliminarCliente'] = 'ClienteController/eliminar';

// rutas del venta

$route['venta'] = 'VentaController/index';
$route['buscarCliente'] = 'VentaController/buscarCliente';
$route['guardar_venta'] = 'VentaController/guardar'; 
$route['editarventa'] = 'VentaController/editar';
$route['updateventa'] = 'VentaController/update';
$route['eliminarventa'] = 'VentaController/eliminar';