<?php header('Content-Type: text/html; charset=utf-8');
/**
 * RestaCarta - Carta Virtual para Restaurantes   
 * Autores: Jose Luis Orozco Mejia - Carolina Ortega Arbelaez
 */

require 'Slim/Slim.php';
require 'controlador/index.php';
require 'controlador/empresa.php';

\Slim\Slim::registerAutoloader();

/**
 * Instancia de Slim
 */
$app = new \Slim\Slim(array(
    'mode' => 'development',
    'debug' => true,
    'templates.path' => './vista',
    ));

$app->setName('RestaCarta - Carta Virtual para Restaurantes');


// GET ruta inicial del sitio
$app->get('/', function () use ($app) {
    index($app);
});

//GET Ruta para las empresas
$app->get('/:empresa', function ($empresa) use ($app){
	empresa($app,$empresa);
});



/**
 * Ejecuta la aplicacion
 */
$app->run();
