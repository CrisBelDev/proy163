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
