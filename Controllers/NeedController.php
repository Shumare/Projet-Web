<?php
namespace Website\Controllers;

use Website\Models\NeedModel;

class NeedController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $needsModel= new NeedModel;
        // on va chercher toutes les annonces 
        $needs= $needsModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('needs/index'), ['needs' =>$needs]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $needsModel= new NeedModel;

        //on va chercher un people par rapport a son id 
        $needs =$needsModel->find($id);
        //on envoie à la vue 
        $this->rendu(array('needs/read'), compact('needs'));
    }
}