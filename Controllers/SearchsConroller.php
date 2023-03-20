<?php
namespace Website\Controllers;

use Website\Models\SearchsModel;

class SearchsController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $searchsModel= new SearchsModel;
        // on va chercher toutes les annonces 
        $searchs= $searchsModel->findAll();
        
        //on genere la vue 
        $this->rendu('searchs/index', ['searchs' =>$searchs]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $searchsModel= new SearchsModel;

        //on va chercher un people par rapport a son id 
        $searchs =$searchsModel->find($id);
        //on envoie à la vue 
        $this->rendu('searchs/read', compact('searchs'));
    }
}