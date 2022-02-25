<?php

require_once 'View/View.php';

class ConnectionController
{
    //Herstellung eines Interface mit einem Form für die Verbindung
    public function connection()
    {
        $view = new View("Connection");
        $view->create();
    }
}