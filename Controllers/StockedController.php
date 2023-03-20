<?php
namespace Website\Controllers;

use Website\Models\StockedModel;

class StockedController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $stockedModel= new StockedModel;
        // on va chercher toutes les annonces 
        $stocked= $stockedModel->findAll();
        
        //on genere la vue 
        $this->rendu('stocked/index', ['stocked' =>$stocked]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $stockedModel= new StockedModel;

        //on va chercher un people par rapport a son id 
        $stocked =$stockedModel->find($id);
        //on envoie à la vue 
        $this->rendu('stocked/read', compact('stocked'));
    }
}