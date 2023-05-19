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

// Routes Untuk Login 
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::Home');
$routes->post('/auth', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
//Routes MVC table Staff
$routes->get('/staff', 'staff::index');
$routes->get('/staff-add', 'staff::add');
$routes->post('/staff-addpro', 'staff::addpro');
$routes->get('/staff-edit/(:num)', 'staff::edit/$1');
$routes->post('/staff-editpro', 'staff::editpro');
$routes->get('/staff-delete/(:num)', 'staff::delete/$1');
//Routes MVC table Category
$routes->get('/category', 'category::index');
$routes->get('/category-add', 'category::add');
$routes->post('/category-addpro', 'category::addpro');
$routes->get('/category-edit/(:num)', 'category::edit/$1');
$routes->post('/category-editpro', 'category::editpro');
$routes->get('/category-delete/(:num)', 'category::delete/$1');
//Routes MVC table Publisher
$routes->get('/publisher', 'publisher::index');
$routes->get('/publisher-add', 'publisher::add');
$routes->post('/publisher-addpro', 'publisher::addpro');
$routes->get('/publisher-edit/(:num)', 'publisher::edit/$1');
$routes->post('/publisher-editpro', 'publisher::editpro');
$routes->get('/publisher-delete/(:num)', 'publisher::delete/$1');
// Routes MVC table Borrower 
$routes->get('/borrower', 'borrower::index');
$routes->get('/borrower-add', 'borrower::add');
$routes->post('/borrower-addpro', 'borrower::addpro');
$routes->get('/borrower-edit/(:num)', 'borrower::edit/$1');
$routes->post('/borrower-editpro', 'borrower::editpro');
$routes->get('/borrower-delete/(:num)', 'borrower::delete/$1');
//Routes MVC table Book
$routes->get('/book', 'Book::index');
$routes->get('/book-add', 'book::add');
$routes->post('/book-addpro', 'book::addpro');
$routes->get('/book-edit/(:num)', 'book::edit/$1');
$routes->post('/book-editpro', 'book::editpro');
$routes->get('/book-delete/(:num)', 'book::delete/$1');
//Routes MVC table Borrow
$routes->get('/borrow', 'borrow::index');
$routes->get('/borrow-add', 'borrow::add');
$routes->post('/borrow-addpro', 'borrow::addpro');
$routes->get('/borrow-edit/(:num)', 'borrow::edit/$1');
$routes->post('/borrow-editpro', 'borrow::editpro');
$routes->get('/borrow-delete/(:num)', 'borrow::delete/$1');
// Routes Pengembalian Buku
$routes->get('/borrow-return/(:num)', 'borrow::returnbook/$1');



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
