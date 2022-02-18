<?php

class View
{
    private $file;

    private $title;

    public function __construct($action)
    {
        //Name der Datei
        $this->file = "View/" . $action . "View.php";
    }

    //Herstellung des Views
    public function create($data)
    {
        //Herstellung des spezischen Teils des Views
        $content = $this->createFile($this->file, $data);
        //Herstellung des üblichen Teils
        $view = $this->createFile('View/template.php', array('title' => $this->title, 'content' => $content));
        echo $view;
    }

    public function createFile($file, $data)
    {
        if (file_exists($file)) {
            //Konvertierung des Arrays in Variabel
            extract($data);
            //Sendung des Files wird aufgeschoben
            ob_start();

            require $file;

            //Beendungder Verzögerungszeit
            return ob_get_clean();
        } else {
            throw new Exception($file . "existiert nicht");
        }
    }
}