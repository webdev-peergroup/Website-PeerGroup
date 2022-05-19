<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::landing');
$routes->get('/home', 'Home::index');
$routes->get('/detail-artikel/(:any)', 'Home::detart/$1');
$routes->get('/artikel/(:segment)', 'Home::artikel/$1');
$routes->get('/about', 'Home::about');
//Bagian login
$routes->get('/login', 'Login::index');
$routes->post('/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
$routes->get('/admin-panel', 'Login::admin');
//Bagian Admin Artikel
$routes->get('/artikel-admin', 'Login::artikel');
$routes->put('/artikel-admin/edit/(:any)', 'Login::edit_artikel/$1');
$routes->delete('/artikel-admin/hapus/(:num)', 'Login::hapus_artikel/$1');
//Bagian Admin Kegiatan
$routes->get('/kegiatan-admin', 'Login::kegiatan');
$routes->delete('/kegiatan-admin/hapus/(:num)', 'Login::hapus_kegiatan/$1');
$routes->put('/kegiatan-admin/edit/(:any)', 'Login::edit_kegiatan/$1');
//Bagian Admin Tambah Data
$routes->get('/tambah-data', 'Login::tambah_data');
//Bagian Admin Profile Data
$routes->get('/profile', 'Login::profile');
$routes->get('/update/profile/(:num)', 'Login::update_profile/$1');


//Ajax Request
$routes->get('/admin-panel/ajax/(:any)', 'Login::ajax/$1');
$routes->get('/admin-panel/ajax', 'Login::ajax2');
$routes->get('/admin-panel/ajax-kegiatan/(:any)', 'Login::ajaxKegiatan/$1');
$routes->get('/admin-panel/ajax-kegiatan', 'Login::ajaxKegiatan2');







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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
