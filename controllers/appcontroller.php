<?php
/**
* AppController is a generic PHP class for custom code to keep the index.php file slim
*/
class AppController
{

    private $app;


    function __construct()
    {
        $this->app =\Slim\Slim::getInstance();
    }


    public function showAppView()
    {
        $this->app->render('index.html');
    }


    public function show404View()
    {
        $this->app->render('404.html');
    }


    public function showRobotsFile()
    {
        $this->app->render('robots.txt');
    }


    public function showFavicon()
    {

    }

    public function jump($howfar=5)
    {
        echo $howfar;
    }
}


