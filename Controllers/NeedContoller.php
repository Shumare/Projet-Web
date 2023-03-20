<?php
namespace Website\Controllers;

use Website\Models\NeedModel;

class NeedController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $needModel= new NeedModel;
        // on va chercher toutes les annonces 
        $need= $needModel->findAll();
        
        //on genere la vue 
        $this->rendu('need/index', ['need' =>$need]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $needModel= new NeedModel;

        //on va chercher un people par rapport a son id 
        $need =$needModel->find($id);
        //on envoie à la vue 
        $this->rendu('need/read', compact('need'));
    }
}