<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
| Views por defecto(default_controller)
*/
$route['default_controller'] = "welcome";
$route['login_ajax'] = "welcome/valid_login_ajax";
$route['logout_ajax'] = "welcome/logout_ajax";
/*
* Rutas para tratamiento de usuarios para ingreso y cierre de sesión.
* Verifico user  y pass (verifico)
* Views de Login(ingreso)
* Logueo correcto voy al Panel Principal(panel)
* Cierro sesión(logout)
* Views de error(404_override)
*/
$route['verifico'] = "back/verifico_controller";
$route['ingreso'] = "back/socio_controller";
$route['panel'] = "back/panel_controller";
$route['logout'] = 'back/panel_controller/logout';
$route['404_override'] = '';
/*
* Rutas para tratamiento de socios
* Views a los datos de los socios(datos)
* Views form insert datos(insert)
* Views guarda form insert datos(registro)
* Views a editar socio y muestra los datos del socio a editar(user_edit/(:num))
* Envia los nuevos datos del socio modificado(user_up/(:num))
*/
$route['datos'] = 'back/socio_controller/all';
$route['insert'] = 'back/socio_controller/form_insert';
$route['registro'] = 'back/socio_controller/insert_socio';
$route['user_edit/(:num)'] = "back/socio_controller/edit/$1";
$route['user_up/(:num)'] = "back/socio_controller/editar_socio/$1";
/*
* Rutas para tratamiento de datos de libros
* Muestra todos los libros(libros)
* Muestra formulario para insertar libros(insert_l)
* Inserta libro(registro_l)
*/
$route['libros'] = 'back/libro_controller';
$route['insert_l'] = 'back/libro_controller/form_insert_l';
$route['registro_l'] = 'back/libro_controller/insert_libro';
$route['libro_edit/(:num)'] = "back/libro_controller/edit/$1";
$route['libro_up/(:num)'] = "back/libro_controller/editar_libro/$1";
$route['remove_libro/(:num)'] = "back/libro_controller/remove_libro/$1";
$route['libro_disabled'] = "back/libro_controller/disabled_libros";
$route['activar_libro/(:num)'] = "back/libro_controller/active_libro/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */