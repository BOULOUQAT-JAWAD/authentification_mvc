<?php
include_once 'Model/Model.php';
abstract class Controller
{
    public function __construct($model)
    {
        include_once ROOT.'Model/'.$model.'.php';
        include_once ROOT.'Model/Etudiant.php';
    }

    public function view($fichier, $data=null)
    {
        include_once  ROOT."View/etudiant/$fichier.php";
    }

    public function Redirect($chemin)
    {
        header('Location: '.$chemin);
    }
}