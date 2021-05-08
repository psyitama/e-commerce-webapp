<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
//pages
$route['signup'] = 'pages/signup';
// customer
$route['products'] = 'customers/index';
$route['products/categories/(:num)/(:num)'] = 'customers/products_pagination/$1/$2';
$route['products/show/(:any)'] = 'customers/show/$1';
$route['carts'] = 'customers/carts';
// seller
$route['dashboard'] = 'sellers/index';
$route['dashboard/products'] = 'sellers/products';
