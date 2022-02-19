<?php

require_once 'Modell/PublicationModell.php';
require_once 'View/View.php';

class PublicationController
{
    private $publication;

    public function __construct()
    {
        $this->publication = new Publication();
    }

    //Eine Publikation mit einem bestimmten ID wird angezeigt
    public function publication($idPublication)
    {
        $publication = $this->publication->getPublication($idPublication);
        $view = new View("Publication");
        $view->create(array('publication' => $publication));
    }
}