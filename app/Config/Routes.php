<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::login');
$routes->post('/login', 'login::loginProcess');
$routes->get('/logout', 'login::logout');

$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);

$routes->get('/student', 'Student::index',['filter' => 'auth']);
$routes->get('/student/add','Student::addStudent',['filter' => 'auth']);
$routes->post('/student/save','Student::saveStudent',['filter' => 'auth']);
$routes->get('/student/edit/(:num)','Student::editStudent/$1',['filter' => 'auth']);
$routes->post('/student/update','Student::updateStudent',['filter' => 'auth']);
$routes->get('/student/delete/(:num)','Student::deleteStudent/$1',['filter' => 'auth']);
$routes->get('email','Student::email',['filter' => 'auth']);
$routes->get('api','Student::callApi',['filter' => 'auth']);
$routes->get('api/create','Student::createData',['filter' => 'auth']);

$routes->get('/teacher', 'Teacher::index',['filter' => 'auth']);
$routes->get('/teacher/add','Teacher::addTeacher',['filter' => 'auth']);
$routes->post('/teacher/save','Teacher::saveTeacher',['filter' => 'auth']);
$routes->get('/teacher/edit/(:num)','Teacher::editTeacher/$1',['filter' => 'auth']);
$routes->post('/teacher/update','Teacher::updateTeacher',['filter' => 'auth']);
$routes->get('/teacher/delete/(:num)','Teacher::deleteTeacher/$1',['filter' => 'auth']);

$routes->get('/admin', 'Admin::index',['filter' => 'auth']);
$routes->get('/admin/add','Admin::addAdmin',['filter' => 'auth']);
$routes->post('/admin/save','Admin::saveAdmin',['filter' => 'auth']);
$routes->get('/admin/edit/(:num)','Admin::editAdmin/$1',['filter' => 'auth']);
$routes->post('/admin/update','Admin::updateAdmin',['filter' => 'auth']);
$routes->get('/admin/delete/(:num)','Admin::deleteAdmin/$1',['filter' => 'auth']);