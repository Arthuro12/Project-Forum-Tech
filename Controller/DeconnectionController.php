<?php

class DeconnectionController
{
    //Abmeldung eines User
    public function deconnection()
    {
        session_start();
        //session_destroy();
        unset($_SESSION['auth']);
    }
}