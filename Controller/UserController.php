<?php

require_once 'Modell/UserModell.php';
require_once 'View/View.php';

class UserController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function userSignin()
    {
        if (isset($_GET['submit'])) {
            if (!empty($_GET['firstName']) && !empty($_GET['lastName']) && !empty($_GET['email']) && !empty($_GET['password'])) {
                $firstName = htmlspecialchars($_GET['firstName']);
                $lastName = htmlspecialchars($_GET['lastName']);
                $password = password_hash($_GET['password'], PASSWORD_BCRYPT);
                $email = htmlspecialchars($_GET['email']);
                $user = $this->user->setUser($lastName, $firstName, $password, $email);
            } else {
                throw new Exception("Füllen Sie alle Felder bitte!");
            }
        }
    }
}