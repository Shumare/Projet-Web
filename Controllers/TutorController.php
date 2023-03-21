<?php
namespace Website\Controllers;

use Website\Models\TutorModel;
use Website\Models\PeopleModel;
class TutorController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $tutorModel= new TutorModel;
        // on va chercher toutes les annonces 
        $tutor= $tutorModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('tutor/index'), ['tutor' =>$tutor]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $tutorModel= new TutorModel;
 
         //on va chercher un people par rapport a son id 
         $tutor =$tutorModel->find($id);

         // on instancie le model
        $peopleModel= new PeopleModel;

        //on va chercher un people par rapport a son id 
        $people =$peopleModel->find($tutor->id_people);
         //on envoie à la vue 
         $this->rendu(array('tutor/read','people/read'), array_merge(compact('tutor'),compact('people')));
     }
}