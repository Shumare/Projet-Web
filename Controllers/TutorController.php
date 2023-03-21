<?php
namespace Website\Controllers;

use Website\Models\TutorModel;

class TutorController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $tutorModel= new TutorModel;
        // on va chercher toutes les annonces 
        $tutor= $tutorModel->findAll();
        
        //on genere la vue 
        $this->rendu('tutor/index', ['tutor' =>$tutor]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $tutorModel= new TutorModel;
 
         //on va chercher un people par rapport a son id 
         $tutor =$tutorModel->find($id);
         //on envoie à la vue 
         $this->rendu('tutor/read', compact('tutor'));
     }
}