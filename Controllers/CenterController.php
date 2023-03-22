<?php

namespace Website\Controllers;

use Website\Models\CenterModel;

class CenterController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $centerModel= new CenterModel;
        // on va chercher toutes les annonces 
        $center= $centerModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('center/index'), ['center' =>$center]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $centerModel= new CenterModel;

        //on va chercher un people par rapport a son id 
        $center =$centerModel->find($id);
        //on envoie à la vue 
        $this->rendu(array('center/read'), compact('center'));
    }
}