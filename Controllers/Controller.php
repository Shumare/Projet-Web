<?php
namespace Website\Controllers;
use Smarty;

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
                require_once ROOT . '/smarty/templates/' . $fichier[$i] . '.php';
            }
        }else{
            require_once ROOT . '/smarty/templates/' . $fichier[0] . '.php';
        }

        // On stocke le contenu dans $content
        $contenu = ob_get_clean();

        return $contenu;
        //$this->index($contenu);
        //require_once ROOT . '/smarty/templates/index.tpl';
    }

    public function init_smarty()
    {
        require_once ROOT.'/smarty/Smarty.class.php';
        $smarty = new Smarty();

        $smarty->setTemplateDir('/smarty/templates');
        $smarty->setCompileDir('/smarty/templates_c');
        $smarty->setCacheDir('/smarty/cache');
        $smarty->setConfigDir('/smarty/configs');

        return $smarty;
    }
}