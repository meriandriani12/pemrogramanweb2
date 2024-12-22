<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('chart','Home::chart');
$routes->get('checkout','Home::checkout');
$routes->get('search', 'Home::search');
$routes->post('submit','Home::submit');

//admin
$routes->get('admin/pelanggan', 'AdminController::pelanggan');

service('auth')->routes($routes);

//Admin
$routes->group('admin', ['filter'=>'group:admin'],function($routes){


$routes->get('pelanggan','admincontroller::pelanggan');
$routes->get('dashboard','admincontroller::dashboard');
$routes->get('transaksi','admincontroller::transaksi');
$routes->get('data-buku','admincontroller::data_buku');
$routes->post('data-buku', 'AdminController::create_buku');


});