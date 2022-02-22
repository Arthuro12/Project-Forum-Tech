<?php

abstract class Modell
{
    private $db;

    protected function requestExecutor($sql, $params = null)
    {
        if ($params == null) {
            //Anfrage wird direkt ausgeführt
            $result = $this->getDb()->query($sql);
        } else {
            //Vorbereitete Anfrage an der Datenbank
            $result = $this->getDb()->prepare($sql);
            $result->execute($params);
        }
        return $result;
    }

    private function getDb()
    {
        //Verbindung zur der Datenbank
        if ($this->db == null) {
            try {
                $this->db = new PDO('mysql:host=localhost;dbname=forum_tech;charset=utf8', 'root', 'root');
            } catch (Exception $e) {
                die('Error : ' . $e->getMessage());
            }
        }
        return $this->db;
    }
}