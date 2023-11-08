<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/generator', 'Home::index');
$routes->get('/', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/board', 'Home::board');
