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

    //
    public function userSignin()
    {
        //Daten aus dem Formular werde genommen und dann in der Datenbank gespeichert
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


    //Gibt die Persönlich View des Benutzers wenn seine Authentifizierung erfolgreich war
    public function userConnect($email)
    {
        if (isset($_GET['submit'])) {
            if (!empty($_GET['email']) && !empty($_GET['password'])) {
                //Herstellung einer Session
                session_start();
                $email = $_GET['email'];
                $_SESSION['email'] = $email;
                $user = $this->user->getUser($_SESSION['email']);
                var_dump($_GET['password']);
                var_dump($user['user_password']);
                if (password_verify($_GET['password'], $user['user_password'])) {
                    $_SESSION['auth'] = $user;
                    header('Location: index.php');
                    //$view = new View("User");
                    //$view->create(array('user' => $user));
                    exit();
                } else {
                    throw new Exception("ID oder Passwort inkorrekt");
                }
            } else {
                throw new Exception("Füllen Sie alle Felder bitte");
            }
        }
    }

    //Herstellung eines Views mit den persönlichen Informationen eines Users
    public function userView()
    {
        session_start();
        $user = $this->user->getUser($_SESSION['email']);
        $view = new View("User");
        $view->create(array('user' => $user));
    }
}