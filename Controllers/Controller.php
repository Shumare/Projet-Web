<?php

namespace Website\Controllers;


 abstract class Controller
{
    public function rendu(string $fichier,  array $data = [])
    {
        //on extrait les données 
        extract($data);

        //on demarre le buffer de sortie
        ob_start();

        // Crée le chemin et inclut le fichier de vue
        require_once ROOT . '/Views/' . $fichier . '.php';

        // On stocke le contenu dans $content
        $contenu = ob_get_clean();

        // On fabrique le "template"
        require_once ROOT . '/Views/default.php';
    }
}