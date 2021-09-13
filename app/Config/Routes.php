<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:superadmin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:superadmin']);
$routes->get('/admin/(:num)', 'Admin::detail/(:num)', ['filter' => 'role:superadmin']);

$routes->get('/siswa_tbtk/penggantian_password/(:segment)', 'Siswa_tbtk::penggantian_password/$1');
$routes->delete('/siswa_tbtk/(:num)', 'Siswa_tbtk::delete/$1');
$routes->get('/siswa_tbtk/detail/(:any)', 'Siswa_tbtk::detail/$1');

$routes->get('/siswa_sd/penggantian_password/(:segment)', 'Siswa_sd::penggantian_password/$1');
$routes->delete('/siswa_sd/(:num)', 'Siswa_sd::delete/$1');
$routes->get('/siswa_sd/detail/(:any)', 'Siswa_sd::detail/$1');

$routes->get('/siswa_smp/penggantian_password/(:segment)', 'Siswa_smp::penggantian_password/$1');
$routes->delete('/siswa_smp/(:num)', 'Siswa_smp::delete/$1');
$routes->get('/siswa_smp/detail/(:any)', 'Siswa_smp::detail/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}