<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'error404';

// Home
$route['instrumentos-de-cuerdas'] = 'home/instrumentos_de_cuerdas';
$route['bocinas-y-accesorios'] = 'home/bocinas_y_accesorios';
$route['equipos-de-sonido'] = 'home/equipos_de_sonido';

// Detalle del producto
$route['detalle-producto/(:num)'] = 'home/detalle_del_producto/$1';

// Carrito
$route['carrito'] = 'carrito/carrito'; // Carrito de compras
$route['realizar-pago'] = 'carrito/realizar-pago'; // Carrito de compras

// Administrador.

$route['login'] = 'Auth';

// Usuario
$route['administrador/usuarios/editar/(:num)'] = 'administrador/editar_usuario/$1';

// Categoria
$route['administrador/categorias'] = 'category/categorias'; // Muestro todas las categorias
$route['administrador/categoria/info/(:num)'] = 'category/info/$1'; // Ruta para ver la informacion de la categoria
$route['administrador/categoria/publicar'] = 'category/publicar'; // Ruta para publicar una nueva categoria
$route['administrador/categoria/editar/(:num)'] = 'category/editar/$1'; // Ruta para publicar una nueva categoria
$route['administrador/categoria/update'] = 'category/update';
$route['administrador/categoria/borrar'] = 'category/borrar/$1'; // Ruta para borrar categoria

// Productos
$route['administrador/product/info/(:num)'] = "producto/info_producto/$1"; // Ruta para ver informacion del producto
$route['administrador/product/edit/(:num)'] = "producto/update/$1"; // Ruta para editar el producto

// Clientes
$route['mi-cuenta'] = 'clientes/mi_cuenta'; // Carrito de compras
$route['mi-cuenta/crear-cuenta'] = 'clientes/crear_cuenta'; // Carrito de compras
$route['mi-cuenta/login'] = 'clientes/login'; // Carrito de compras
$route['mi-cuenta/logout'] = 'clientes/logout'; // Carrito de compras

$route['administrador/compra-estado'] = 'Compra_estado'; // Carrito de compras

$route['administrador/clientes'] = 'administrador/mostrar_clientes'; // Ruta para mostrar clientes
$route['administrador/cliente/info/(:num)'] = 'administrador/info_cliente/$1'; // Ruta para mostrar clientes
$route['administrador/cliente/registrar'] = 'administrador/registrar_cliente'; // Ruta para registrar cliente

// Proveedores
$route['administrador/proveedores'] = 'proveedores/proveedores'; // Ruta para mostrar todos los proveedores
$route['administrador/proveedores/info/(:num)'] = 'proveedores/proveedores_info/$1'; // Ruta para mostrar todos los proveedores
$route['administrador/proveedores/registrar'] = 'proveedores/registrar'; // Ruta para mostrar todos los proveedores
$route['translate_uri_dashes'] = true;
