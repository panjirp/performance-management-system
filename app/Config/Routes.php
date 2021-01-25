<?php namespace Config;

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
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('login', 'Login::index');
$routes->post('login/login_process', 'Login::login_process');

$routes->get('/home', 'Home::index', ['filter' => 'sessionCheck']);
$routes->get('/employee', 'Employee::index', ['filter' => 'sessionCheck']);
$routes->get('/employee/new', 'Employee::new', ['filter' => 'sessionCheck']);
$routes->get('/employee/edit/(:segment)', 'Employee::edit', ['filter' => 'sessionCheck']);
$routes->get('/operational', 'Operational::index', ['filter' => 'sessionCheck']);
$routes->get('/master/department', 'Master::department', ['filter' => 'sessionCheck']);
$routes->get('/master/department/new_department', 'Master::new_department', ['filter' => 'sessionCheck']);
$routes->get('/master/department/edit_department/(:segment)', 'Master::edit_department', ['filter' => 'sessionCheck']);
$routes->get('/master/job_position', 'Master::job_position', ['filter' => 'sessionCheck']);
$routes->get('/master/job_position/new_job_position', 'Master::new_job_position', ['filter' => 'sessionCheck']);
$routes->get('/master/job_position/edit_job_position/(:segment)', 'Master::edit_job_position', ['filter' => 'sessionCheck']);


/**
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
