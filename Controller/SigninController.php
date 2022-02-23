<?php
require_once 'View/View.php';

class SigninController
{
    public function signin()
    {
        $view = new View("Signin");
        $view->create();
    }

    public function userSignin()
    {
        if (isset($_GET['submit'])) {
            if (!empty($_GET['firstName']) && !empty($_GET['lastName']) && !empty($_GET['email']) && !empty($_GET['password'])) {
                $firstName = htmlspecialchars($_GET['fisrtName']);
                $lastName = htmlspecialchars($_GET['lastName']);
                $email = htmlspecialchars($_GET['email']);
                $password = hash($_GET['password'], PASSWORD_BCRYPT);
                $this->homeCtr->home();
            } else {
                throw new Exception("Füllen Sie alle Felder bitte!");
            }
        }
    }
}