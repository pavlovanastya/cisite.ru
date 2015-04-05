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
| 	example.com/class/method/id/
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
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "pages/show/index";
$route['scaffolding_trigger'] = "";


$route['materials/(:num)']  = 'materials/show/$1';

$route['sections/show']  = 'pages/show/index';
$route['materials/show'] = 'pages/show/index';
$route['pages/show']     = "pages/show/index";

$route['pages/about_me'] = 'pages/show/about_me';
$route['pages/contact']  = 'pages/show/contact';

$route['sections/articles'] = 'sections/show/articles';
$route['sections/html']     = 'sections/show/html';
$route['sections/php']      = 'sections/show/php';
$route['sections/css']      = 'sections/show/css';

$route['rss']            = 'administration/rss';
$route['archive']        = 'administration/archive';
$route['archive/(:any)'] = 'administration/archive/$1';
$route['search']         = 'administration/search';
$route['search/(:num)']  = 'administration/search/$1';


/* End of file routes.php */
/* Location: ./system/application/config/routes.php */