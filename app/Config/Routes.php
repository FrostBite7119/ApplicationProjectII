<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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

// routes user
$routes->get('/', 'Home::index');
$routes->get('/main', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/user', 'Home::index');
$routes->get('/course_detail/(:any)', 'Home::courseDetail/$1');
$routes->get('/search', 'Home::search');
$routes->get('/membership', 'Home::membership');
$routes->get('/langganan_pembayaran/(:any)', 'Home::pembayaranlangganan/$1');
$routes->post('/bayar_langganan/(:any)/(:any)', 'Home::bayar/$1/$2');
$routes->get('/course_materi_detail/(:any)', 'Home::detailMateri/$1');
$routes->get('/rating/(:any)/(:any)', 'Home::rating/$1/$2');

// routes admin
$routes->get('/admin/login', 'Login::index');
$routes->post('/admin/login/process', 'Login::processAdmin');
$routes->get('/admin/login/logout', 'Login::logout');
$routes->get('/admin', 'Admin::index');

// routes admin modul
$routes->get('/admin/modul', 'Admin::modul');
$routes->get('/admin/modul/addmodul', 'Admin::addmodul');
$routes->post('/admin/modul/insertmodul', 'Admin::insertModul');
$routes->post('/admin/modul/delete/(:any)', 'Admin::deleteModul/$1');
$routes->get('/admin/modul/editdata/(:any)', 'Admin::editdata/$1');
$routes->post('/admin/modul/updatemodul/(:any)', 'Admin::updateModul/$1');

// routes admin testimoni
$routes->get('/admin/testimoni', 'Admin::testimoni');
$routes->get('/admin/testimoni/addtestimoni', 'Admin::addtestimoni');
$routes->post('/admin/testimoni/inserttestimoni', 'Admin::inserttestimoni');
$routes->post('/admin/testimoni/delete/(:any)', 'Admin::deletetestimoni/$1');
$routes->get('/admin/testimoni/edittestimoni/(:any)', 'Admin::edittestimoni/$1');
$routes->post('/admin/testimoni/updatetestimoni/(:any)', 'Admin::updatetestimoni/$1');

// routes admin langganan
$routes->get('/admin/langganan', 'Admin::langganan');
$routes->get('/admin/langganan/addlangganan', 'Admin::addlangganan');
$routes->post('/admin/langganan/insertlangganan', 'Admin::insertlangganan');
$routes->post('/admin/langganan/delete/(:any)', 'Admin::deletelangganan/$1');
$routes->get('/admin/langganan/editlangganan/(:any)', 'Admin::editlangganan/$1');
$routes->post('/admin/langganan/updatelangganan/(:any)', 'Admin::updatelangganan/$1');

// routes admin pembayaran
$routes->get('/admin/pembayaran', 'Admin::pembayaran');
$routes->get('/admin/pembayaran/detailpembayaran/(:any)', 'Admin::detailpembayaran/$1');
$routes->post('/admin/pembayaran/updatePembayaran/(:any)/(:any)', 'Admin::updatePembayaran/$1/$2');

// routes admin user
$routes->get('/admin/user', 'Admin::user');
$routes->get('/admin/user/detailuser/(:any)', 'Admin::detailuser/$1');

//routes user
$routes->post('/register', 'Register::process');
$routes->post('/login', 'Login::process');
$routes->get('/login/logoutUser', 'Login::logoutUser');
$routes->get('/profile', 'Home::profile');
$routes->get('/riwayat_langganan', 'Home::riwayatlangganan');
$routes->get('/settings_profile', 'Home::settings_profile');
$routes->get('/settings_reset_pass', 'Home::settings_reset_pass');
$routes->get('/kursus_saya', 'Home::kursus_saya');
$routes->post('/updateprofile', 'Home::updateprofile');
$routes->post('/tambahkursussaya/(:any)', 'Home::tambahkursussaya/$1');

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