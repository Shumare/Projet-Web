<?php
namespace Website\Controllers;

use Website\Models\PeopleModel;
use Website\Models\CenterModel;
class PeopleController extends Controller
{

    public function index()
    {
        //on instacie le model coresspondant à la table people
        $peopleModel= new PeopleModel;
        // on va chercher toutes les annonces 
        $people= $peopleModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('people/index'), ['people' =>$people]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $peopleModel= new PeopleModel;

        //on va chercher un people par rapport a son id 
        $people =$peopleModel->find($id);

        $centerModel= new centerModel;
        
        //on va chercher un people par rapport a son id 
        $center =$centerModel->find($people->id_center);
        //on envoie à la vue 
        $this->rendu(array('people/read','center/read'), array_merge(compact('center'),compact('people')));
    }
}