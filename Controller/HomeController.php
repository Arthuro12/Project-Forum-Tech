<?php

require_once 'Modell/PublicationsModell.php';
require_once 'View/View.php';

class ControllerHome
{
    private $publication;

    public function __construct()
    {
        $this->publication = new Publications();
    }

    //Alle Publikationen werden angezeigt
    public function home()
    {
        $publications = $this->publication->getPublications();
        $view = new View("Home");
        $view->create(array('publications' => $publications));
    }
}