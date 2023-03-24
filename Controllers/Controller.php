<?php

namespace Website\Controllers;


 abstract class Controller
{
    public function rendu(array $fichier,  array $data = [])
    {
        //on extrait les données 
        extract($data);

        //on demarre le buffer de sortie
        ob_start();

        if(count($fichier)>=2){
            for($i=0;$i<count($fichier);$i++){
                require_once ROOT . '/Views/' . $fichier[$i] . '.php';
            }
        }else{
            require_once ROOT . '/Views/' . $fichier[0] . '.php';
        }

       echo $currentPage;

        // On stocke le contenu dans $content
        $contenu = ob_get_clean();

        // On fabrique le "template"
        require_once ROOT . '/Views/default.php';
    }
}