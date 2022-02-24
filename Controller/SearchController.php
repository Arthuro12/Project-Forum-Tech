<?php

require_once 'Modell/SearchModell.php';
require_once 'View/View.php';

class SearchController
{
    private $search;

    public function __construct()
    {
        $this->search = new Search();
    }

    public function getSearch()
    {
        //$search =  $this->search->searchPublication();
        if (isset($_GET['search'])) {
            if (!empty($_GET['search'])) {
                $s = htmlspecialchars($_GET['search']);
                $search = $this->search->searchSpecifiedPublication($s);
                $view = new View("Search");
                $view->create(array('search' => $search));
            }
        }
    }
}