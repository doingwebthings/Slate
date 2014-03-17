<?php
require 'vendor/autoload.php';

//add custom app-controllers
require 'controllers/appcontroller.php';

//create slim-app
$app = new \Slim\Slim();

//set config params
$app->config('mode', 'development');
$app->config('debug', 'true');
// $app->config('templates.path', './client/dist'); // set template path to './client/dist' for yeoman-generated clients
$app->config('templates.path', './views'); // traditional views dir


//set up routes
$app->get('/', 'AppController:showAppView');
$app->get('/index.html', 'AppController:showAppView');
$app->get('/robots.txt', 'AppController:showRobotsFile');

$app->notFound(function () use ($app)
{
    $app->render('404.html');
});

//use AppController
$app->get('/hello/', '\AppController:jump');

//use AppController with params
//$app->get('/hello/:name/:name2', '\TestController:sayHello');



$app->run();