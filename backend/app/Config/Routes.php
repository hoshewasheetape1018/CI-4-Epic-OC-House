<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Users::index');
$routes->get('/signup', 'Registration::index');
$routes->get('/login', 'Login::index');
