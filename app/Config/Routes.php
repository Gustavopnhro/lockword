<?php

use App\Controllers\Keys;

$routes->get('/create', 'Keys::create');
$routes->post('/store', 'Keys::store');

$routes->get('/edit/(:num)', 'Keys::edit');
$routes->post('/edit/(:num)', 'Keys::editAction');

$routes->get('/delete/(:num)', 'Keys::delete/$1');
$routes->get('/board', 'Keys::index');

$routes->get('/', 'Home::login');
$routes->get('/register', 'Home::register');
