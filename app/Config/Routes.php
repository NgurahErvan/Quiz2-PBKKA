<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('movies', 'Movies::index');
$routes->get('reserve/(:num)', 'Movies::reserve/$1');
$routes->post('reserve/book', 'Movies::book');
$routes->get('admin', 'Admin::index');
$routes->post('admin/login', 'Admin::login'); // Handle admin login
$routes->get('admin/dashboard', 'Admin::dashboard'); // Show admin dashboard
$routes->get('admin/movieList', 'Admin::list'); // Show admin dashboard
$routes->get('admin/logout', 'Admin::logout'); // Handle admin logout
$routes->get('admin/mov/edit/(:segment)', 'Admin::editmov/$1');
$routes->get('admin/mov/delete/(:segment)', 'Admin::deletemov/$1');