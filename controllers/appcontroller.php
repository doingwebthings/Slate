<?php
/**
* AppController is a generic PHP class for custom code to keep the index.php file slim
*/
class AppController
{

    function __construct()
    {


    }

    public function jump($howfar=5)
    {
        echo $howfar;
    }
}

// AppController::jump();
