<?php

namespace Website\Controllers;

use Website\Models\Intern_RatingModel;

class Intern_RatingController extends Controller{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $intern_ratingModel= new Intern_RatingModel;
        // on va chercher toutes les annonces 
        $intern_rating= $intern_ratingModel->findAll();
        
        //on genere la vue 
        $this->rendu('intern_rating/index', ['intern_rating' =>$intern_rating]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $intern_ratingModel= new Intern_RatingModel;
 
         //on va chercher un people par rapport a son id 
         $intern_rating =$intern_ratingModel->find($id);
         //on envoie à la vue 
         $this->rendu('intern_rating/read', compact('intern_rating'));
     }
}