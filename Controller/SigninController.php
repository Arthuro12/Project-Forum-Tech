<?php
require_once 'View/View.php';

//Herstellung der Registrierungsseite
class SigninController
{
    public function signin()
    {
        $view = new View("Signin");
        $view->create();
    }
}