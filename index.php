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


/*-----RUTAS DE LA PAGINA WEB -------*/
/*-----------------------------------*/
// GET ruta inicial del sitio
$app->get('/', function () use ($app) {
    cargar($app,'index');
});
//GET Ruta para el registro
$app->get('/registro', function () use ($app){
	cargar($app,'registro');
});
$app->get('/que-es', function () use ($app){
	cargar($app,'que-es');
});
$app->get('/contacto', function () use ($app){
	cargar($app,'contacto');
});
$app->get('/demo', function () use ($app){
	cargar($app,'demo');
});
//GET Ruta para las empresas
$app->get('/carta/:empresa', function ($empresa) use ($app){
	empresa($app,$empresa);
});



/*-----RUTAS DEl PANEL DE EMPRESAS -------*/

/**
 * Ejecuta la aplicacion
 */
$app->run();
