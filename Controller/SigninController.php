<?php

require_once 'View/View.php';

class SigninController
{
    public function signin()
    {
        $view = new View("Signin");
        $view->create();
    }
}