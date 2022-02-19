<?php
require_once 'Modell/Modell.php';

class Publications extends Modell
{
    public function getPublications()
    {
        $sql = "SELECT publication_id AS id, title As title, SUBSTRING(publication_description, 1, 700) AS publicationdescription, publication_date AS publicationdate
                FROM publication";
        $publications = $this->requestExecutor($sql);
        return $publications;
    }
}