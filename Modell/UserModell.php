<?php

require_once 'Modell/Modell.php';

class User extends Modell
{
    //Herstellung eines neuen User
    public function setUser($lastName, $firstName, $password, $email)
    {
        $sql = "INSERT INTO users (last_name, first_name, user_password, e_mail)
                VALUES (?, ?, ?, ?)";
        $user = $this->requestExecutor($sql, array($lastName, $firstName, $password, $email));
        return $user;
    }

    //Suche eines Users in der Datenbank
    public function getUser($email)
    {
        $sql = "SELECT * FROM users
                WHERE e_mail = ?";
        $user = $this->requestExecutor($sql, array($email));
        if ($user->rowCount() == 1) {
            return $user->fetch();
        } else {
            throw new Exception("Error");
        }
    }
}