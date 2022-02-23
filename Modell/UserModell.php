<?php

require_once 'Modell/Modell.php';

class User extends Modell
{
    //Herstellung eines neuen User
    public function setUser($lastName, $firstName, $email, $password)
    {
        $sql = "INSERT INTO users (last_name, first_name, e_mail, user_password)
            VALUES (?, ?, ?, ?)";
        $user = $this->requestExecutor($sql, array($lastName, $firstName, $password, $email));
    }
}