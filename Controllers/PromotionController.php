<?php

namespace Website\Controllers;

use Website\Models\PromotionModel;

class PromotionController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $promotionModel= new PromotionModel;
        // on va chercher toutes les annonces 
        $promotion= $promotionModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('promotion/index'), ['promotion' =>$promotion]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $promotionModel= new PromotionModel;
 
         //on va chercher un people par rapport a son id 
         $promotion =$promotionModel->find($id);
         //on envoie à la vue 
         $this->rendu(array('promotion/read'), compact('promotion'));
     }
}