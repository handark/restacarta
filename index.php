<?php

require 'Slim/Slim.php';

$app = new Slim();

//Pagina principal

$app->get('/hola/:name', function ($name) {
    echo "Hello, $name";
});

?>