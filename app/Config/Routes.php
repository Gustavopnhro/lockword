<?php

use App\Controllers\Keys;

// KEYS CRUD
$routes->get('/create', 'Keys::create');
$routes->post('/store', 'Keys::store');

$routes->get('/edit/(:num)', 'Keys::edit/$1');

$routes->get('/delete/(:num)', 'Keys::delete/$1');


$routes->get('/board', 'Keys::index');



//USERS CRUD
$routes->get('/', 'Auth::login');
$routes->get('/register', 'Auth::register');

$routes->post('/register', 'Auth::store');
$routes->post('/', 'Auth::do_login');

$routes->get('/logout', 'Auth::logout');