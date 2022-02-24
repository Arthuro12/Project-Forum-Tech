<?php

require_once 'Modell/Modell.php';

class Search extends Modell
{
    //Suche einer Publikation nach dem Titel
    public function searchSpecifiedPublication($s)
    {

        $sql = 'SELECT title, publication_id FROM publication
                WHERE title LIKE "%' . $s . '%"
                ORDER BY publication_id DESC';
        $search = $this->requestExecutor($sql);
        if ($search->rowCount() > 0) {
            return $search->fetchAll();
        } else {
            throw new Exception("Es wurde keine Publikation für diese Suche gefunden");
        }
    }
}