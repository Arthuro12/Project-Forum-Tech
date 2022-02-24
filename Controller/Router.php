<?php
require_once 'Controller/HomeController.php';
require_once 'Controller/SigninController.php';
require_once 'Controller/ConnectionController.php';
require_once 'Controller/UserController.php';
require_once 'Controller/PublicationController.php';
require_once 'View/View.php';

class Router
{
    private $homeCtr;

    private $signinCtr;

    private $userCtr;

    private $connectionCtr;

    private $publicationCtr;

    public function __construct()
    {
        $this->homeCtr = new HomeController();
        $this->signinCtr = new SigninController();
        $this->userCtr = new UserController();
        $this->connectionCtr = new ConnectionController();
        $this->publicationCtr = new PublicationController();
    }

    public function routerRequest()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action']  == 'publication') {
                    if (isset($_GET['id'])) {
                        $idPublication = intval($_GET['id']);
                        if ($idPublication != 0) {
                            $this->publicationCtr->publication($idPublication);
                        } else {
                            throw new Exception("Ungültige ID");
                        }
                    } else {
                        throw new Exception("Nicht definierte ID");
                    }
                } elseif ($_GET['action'] == 'signin') {
                    $this->signinCtr->signin();
                    //throw new Exception("Ungültige Aktion");
                } elseif ($_GET['action'] == 'connection') {
                    $this->connectionCtr->connection();
                }
            } elseif (isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['email']) && isset($_GET['password'])) {
                $this->userCtr->userSignin();
                $this->homeCtr->home();
            } elseif (isset($_GET['email']) && isset($_GET['password'])) {
                $email = $_GET['email'];
                $password = $_GET['password'];
                $this->userCtr->userConnect($email, $password);
            } else {
                $this->homeCtr->home();
            }
        } catch (Exception $e) {

            $this->error($e->getMessage());
        }
    }

    private function error($messageError)
    {
        $view = new View("Error");
        $view->create(array('messageError' => $messageError));
    }
}