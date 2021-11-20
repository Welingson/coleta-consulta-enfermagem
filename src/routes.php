<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

//LISTA E CADASTRA PACIENTES
$router->get('/pacientes', 'Pacient@index');
$router->post('/pacientes', 'Pacient@index');

//LISTA E CADASTRA DADOS CLINICOS DO PACIENTE
$router->get('/paciente/dados-clinicos', 'Pacient@clinicalData');
$router->post('/paciente/dados-clinicos', 'Pacient@clinicalData');

//LISTA E CADASTRA DADOS DE ENFERMAGEM DO PACIENTE
$router->get('/paciente/dados-de-enfergamgem', 'Pacient@nursingdata');
$router->post('/paciente/dados-de-enfergamgem', 'Pacient@nursingdata');

//LISTA E CADASTRA EXAMES DO PACIENTE
$router->get('paciente/exames', 'Pacient@exam');
$router->post('paciente/exames', 'Pacient@exam');

// $router->get('/sobre/{nome}', 'HomeController@sobreP');
// $router->get('/sobre', 'HomeController@sobre');