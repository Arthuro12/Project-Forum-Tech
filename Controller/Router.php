<?php

require_once 'Controller/HomeController.php';
require_once 'View/View.php';

class Router
{
    private $homeCtr;

    public function __construct()
    {
        $this->homeCtr = new ControllerHome();
    }

    public function routerRequest()
    {
        try {
            $this->homeCtr->home();
        } catch (Exception $e) {

            $this->error($e->getMessage());
        }
    }

    private function error($messageError)
    {
        $view = new View("Error");
        $view->create(array('messageError' => $messageError));
    }
}