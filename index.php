<?php
require 'vendor/autoload.php';

//add custom app-controller
require 'controllers/AppController.php';

//setup slim-app
$app = new \Slim\Slim(array(
    // 'debug'=> true,
    'mode'=>development,
    'templates.path' => './client/dist',
    )
);

// set up routes
$app->get('/', function () use ($app){
    $app->render('index.html');
    }
);
// use AppController
$app->get('/hello/', '\AppController:jump');

// use AppController with params
// $app->get('/hello/:name/:name2', '\TestController:sayHello');



$app->run();