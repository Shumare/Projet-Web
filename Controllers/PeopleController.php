<?php
namespace Website\Controllers;

use Website\Models\PeopleModel;

class PeopleController extends Controller
{

    public function index()
    {
        //on instacie le model coresspondant à la table people
        $peopleModel= new PeopleModel;
        // on va chercher toutes les annonces 
        $people= $peopleModel->findAll();
        
        //on genere la vue 
        $this->rendu('people/index', ['people' =>$people]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $peopleModel= new PeopleModel;

        //on va chercher un people par rapport a son id 
        $people =$peopleModel->find($id);
        //on envoie à la vue 
        $this->rendu('people/read', compact('people'));
    }
}