<?php

class DeconnectionController
{
    public function deconnection()
    {
        session_start();
        unset($_SESSION['auth']);
    }
}