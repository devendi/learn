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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'islam';

$route['malaikat/(:any)'] = 'malaikat/detil/$1';

$route['Al-Quran'] = 'al_quran';
$route['Al-Quran/(:any)'] = 'al_quran/detil/$1';
$route['surah/Al-Quran/(:any)'] = 'al_quran/detil_awalan/$1';
$route['murokkab/Al-Quran/(:any)'] = 'al_quran/detil_murokkab/$1';

$route['version/Al-Quran'] = 'al_quran/version';
$route['version_detil/Al-Quran/(:any)'] = 'al_quran/v_detil/$1';
$route['version_detil_surah/Al-Quran/(:any)/(:num)'] = 'al_quran/v_detil_surah/$1/$2';
$route['tajwid/(:any)'] = 'tajwid/detil/$1';
$route['tajwid/(:any)/(:any)'] = 'tajwid/detil_detil/$1/$2';

$route['solat-fardu'] = 'SolatFardu';
$route['solat-sunat'] = 'SolatSunat';
$route['lain-lain'] = 'general';
$route['general/(:any)'] = 'general/informasi/$1';

$route['kitab_kuning/(:any)'] = 'kitab/kitab_kuning/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




