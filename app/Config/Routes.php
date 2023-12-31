<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/create', 'Dashboard::create');
$routes->get('/dashboard/detail', 'Dashboard::detail');
$routes->get('/dashboard/update', 'Dashboard::update');
$routes->get('/dashboard/trash', 'Dashboard::trash');
$routes->get('/dashboard/update/(:any)', 'Dashboard::update/$1');
$routes->get('/dashboard/update/(:any)/(:any)', 'Dashboard::update/$1/$2');
$routes->get('/dashboard/detail/(:any)', 'Dashboard::detail/$1');
$routes->get('/dashboard/get_data_ajax', 'Dashboard::get_data_ajax');
$routes->get('/dashboard/get_deleted_data_ajax', 'Dashboard::get_deleted_data_ajax');

// action router
$routes->post('/dashboard/create_data', 'Dashboard::create_data');
$routes->post('/dashboard/update_data', 'Dashboard::update_data');
$routes->post('/dashboard/soft_delete', 'Dashboard::soft_delete');
$routes->post('/dashboard/recover_data', 'Dashboard::recover_data');
$routes->get('/dashboard/export_excel', 'Dashboard::export_excel');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
