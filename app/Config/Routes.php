<?php

$routes->get('/mobil', 'MobilController::index');
$routes->get('/mobil/create', 'MobilController::create');
$routes->post('/mobil/store', 'MobilController::store');
$routes->get('/mobil/edit/(:num)', 'MobilController::edit/$1');
$routes->post('/mobil/update/(:num)', 'MobilController::update/$1');
$routes->get('/mobil/delete/(:num)', 'MobilController::delete/$1');
$routes->post('/mobil/search', 'MobilController::search');
