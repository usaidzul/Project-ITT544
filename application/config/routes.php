<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//route['users/chooseuser'] = 'users/chooseuser';
//$route['post/'] = 'post/index
//$route['post/book/(:any)']='post/viewBook/$1';
//$route['post/ajaxsearch'] = 'post/ajaxsearch';
$route['post/book'] = 'post/book';
$route['post/create'] = 'post/create';
$route['post/update'] = 'post/update';
$route['post/(:any)']='post/view/$1';
$route['post'] = 'post/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
