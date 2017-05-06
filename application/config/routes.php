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
|back/socio_controller/editar_socio/
*/
//views por defecto
$route['default_controller'] = "welcome";
// Verifico user  y pass
$route['verifico'] = "back/verifico_controller";
//Logueo correcto voy al Panel Principal
$route['panel'] = "back/panel_controller";
//Cierro sesión
$route['logout'] = 'back/panel_controller/logout';
//views de error
$route['404_override'] = '';
//views a los datos de los socios
$route['datos'] = 'back/socio_controller/all';
//views a editar socio y muestra los datos del socio a editar
$route['user_edit/(:num)'] = "back/socio_controller/edit/$1";
//Envia los nuevos datos del socio modificado
$route['user_up/(:num)'] = "back/socio_controller/editar_socio/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */