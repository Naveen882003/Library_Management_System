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
$routes->setTranslateURIDashes(true);
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
$routes->get('/', 'Home::index');
$routes->add('/loginuser','Home::loginuser');
$routes->add('/registeruser','Home::registeruser');
$routes->add('/user','Home::user');
$routes->add('/loginback','Home::loginback');
$routes->add('/approval','Home::approval');
$routes->add('/bookIssued','Home::bookIssued');
$routes->add('/return_books','Home::return_books');
$routes->add('/books','Home::books');
$routes->add('/addbooks','Home::addbooks');
$routes->add('/add','Home::add');
$routes->add('/home','Home::home');
$routes->add('/logout','Home::logout');
$routes->add('/insert/(:num)','Home::insert/$1');
$routes->add('/inserted/(:num)','Home::inserted/$1');
$routes->add('/return/(:num)','Home::return/$1');
$routes->add('/renew/(:num)','Home::renew/$1');
// $routes->add('/save','Home::save');
$routes->add('/fineStatus/(:num)(:num)','Home::fineStatus/$1/$2');
$routes->add('/approve/(:num)(:num)','Home::approve/$1/$2');
$routes->add('/cancel/(:num)(:num)','Home::cancel/$1/$2');

$routes->add('/','Home::pdf');
$routes->match(['get', 'post'], 'Home/htmlToPDF', 'Home::htmlToPDF');

$routes->get('/excelImport','Home::excelImport');
$routes->get('/', 'Home::index');
$routes->get('download', 'Home::download');

$routes->match(['get', 'post'], 'upload', "Home::upload");










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
