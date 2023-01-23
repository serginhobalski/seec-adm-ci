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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::novo');
$routes->get('logout', 'Login::logout');
$routes->get('esqueci', 'Password::esqueci');
$routes->get('itq', 'Home::itq');
$routes->get('postulantes', 'Home::postulantes');
$routes->get('enaq', 'Home::enaq');
$routes->get('treinamentos', 'Home::treinamentos');
$routes->get('nossos_cursos', 'Home::nossos_cursos');
$routes->get('resultados_enaq', 'Home::resultados_enaq');
$routes->get('seec', 'Home::seec');
$routes->get('departamentos', 'Home::departamentos');
$routes->get('calendario_geral', 'Home::calendario_geral');
$routes->get('calendario_eventos', 'Home::calendario_eventos');
$routes->get('contato', 'Home::contato');
$routes->get('adm', 'Adm::index');
$routes->get('cursos', 'Cursos::index');
$routes->get('mensagens', 'Mensagens::index');
$routes->get('calendario', 'Adm::calendario');
$routes->get('usuarios', 'Usuarios::index');
$routes->get('grupos', 'Grupos::index');
$routes->get('relatorios', 'Relatorios::index');
$routes->get('aulas', 'Aulas::index');
$routes->get('perfil', 'Adm::perfil');
$routes->get('eventos', 'Eventos::index');

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
