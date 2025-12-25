<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::login');
$routes->post('/login', 'Admin::loginProcess');
$routes->get('/logout', 'Admin::logout');

$routes->get('/student', 'Student::index',['filter' => 'auth']);
$routes->get('/student/add','Student::addStudent',['filter' => 'auth']);
$routes->post('/student/save','Student::saveStudent',['filter' => 'auth']);
$routes->get('/student/edit/(:num)','Student::editStudent/$1',['filter' => 'auth']);
$routes->post('/student/update','Student::updateStudent',['filter' => 'auth']);
$routes->get('/student/delete/(:num)','Student::deleteStudent/$1',['filter' => 'auth']);
$routes->get('email','Student::email',['filter' => 'auth']);


$routes->get('/admin', 'Admin::index',['filter' => 'auth']);
$routes->get('/admin/add','Admin::addAdmin',['filter' => 'auth']);
$routes->post('/admin/save','Admin::saveAdmin',['filter' => 'auth']);
$routes->get('/admin/edit/(:num)','Admin::editAdmin/$1',['filter' => 'auth']);
$routes->post('/admin/update','Admin::updateAdmin',['filter' => 'auth']);
$routes->get('/admin/delete/(:num)','Admin::deleteAdmin/$1',['filter' => 'auth']);