<?php
require_once 'Controller/HomeController.php';
require_once 'Controller/PublicationController.php';
require_once 'View/View.php';

class Router
{
    private $homeCtr;

    private $publicationCtr;

    public function __construct()
    {
        $this->homeCtr = new HomeController();
        $this->publicationCtr = new PublicationController();
    }

    public function routerRequest()
    {
        try {
            if (isset($_GET['action'])) {
                if (isset($_GET['action'])  == 'publication') {
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
                } else {
                    throw new Exception("Ungültige Aktion");
                }
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