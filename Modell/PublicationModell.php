<?php
require_once 'Modell/Modell.php';

class Publication extends Modell
{
    public function getPublication($idPublication)
    {
        $sql = "SELECT publication_id AS id, title AS title, publication_description AS publicationdescription, publication_date AS publicationdate
                FROM publication
                WHERE publication_id = ?";
        $publication = $this->requestExecutor($sql, array($idPublication));

        if ($publication->rowCount() == 1) {
            return $publication->fetch();
        } else {
            throw new Exception("Es wurde keine Publikation mit der ID " . $idPublication . " gefunden");
        }
    }
}