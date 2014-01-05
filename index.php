<?php
require 'vendor/autoload.php';

//add custom app-controller
require 'controllers/AppController.php';

//create slim-app
$app = new \Slim\Slim();

//set config params
$app->config('mode', 'developmant');
$app->config('debug', 'true');
$app->config('templates.path', './client/dist');

//set up routes
$app->get('/', 'AppController:showAppView');
$app->get('/index.html', 'AppController:showAppView');
$app->get('/robots.txt', 'AppController:showRobotsFile');

$app->notFound(function () use ($app) {
    $app->render('404.html');
});

//use AppController
$app->get('/hello/', '\AppController:jump');

//use AppController with params
//$app->get('/hello/:name/:name2', '\TestController:sayHello');



$app->run();