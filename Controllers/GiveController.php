<?php
namespace Website\Controllers;

use Website\Models\GiveModel;

class GiveController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $giveModel= new GiveModel;
        // on va chercher toutes les annonces 
        $give= $giveModel->findAll();
        
        //on genere la vue 
        $this->rendu('give/index', ['give' =>$give]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $giveModel= new GiveModel;

        //on va chercher un people par rapport a son id 
        $give =$giveModel->find($id);
        //on envoie à la vue 
        $this->rendu('give/read', compact('give'));
    }
}