<?php

require_once 'View/View.php';

class ConnectionController
{

    public function connection()
    {
        $view = new View("Connection");
        $view->create();
    }
}