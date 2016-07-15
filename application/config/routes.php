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
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

$route['chn'] = 'home/lang/chn';
$route['kor'] = 'home/lang/kor';
$route['ina'] = 'home/lang/ina';
$route['rus'] = 'home/lang/rus';

$route['chn/(:any)/(:any)/(:any)'] = '$1/lang/chn/$2/$3';
$route['kor/(:any)/(:any)/(:any)'] = '$1/lang/kor/$2/$3';
$route['ina/(:any)/(:any)/(:any)'] = '$1/lang/ina/$2/$3';
$route['rus/(:any)/(:any)/(:any)'] = '$1/lang/rus/$2/$3';

$route['chn/(:any)/(:any)'] = '$1/lang/chn/$2';
$route['kor/(:any)/(:any)'] = '$1/lang/kor/$2';
$route['ina/(:any)/(:any)'] = '$1/lang/ina/$2';
$route['rus/(:any)/(:any)'] = '$1/lang/rus/$2';

$route['chn/(:any)'] = '$1/lang/chn';
$route['kor/(:any)'] = '$1/lang/kor';
$route['ina/(:any)'] = '$1/lang/ina';
$route['rus/(:any)'] = '$1/lang/rus';

/*/
$route['(:any)/product'] = 'product/lang/$1';
$route['(:any)/profile'] = 'profile/lang/$1';
$route['(:any)/expertise'] = 'expertise/lang/$1';
$route['(:any)/news'] = 'news/lang/$1';
$route['(:any)/contact'] = 'contact/lang/$1';
/*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */