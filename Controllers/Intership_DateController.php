<?php
namespace Website\Controllers;

use Website\Models\Intership_DateModel;

class Intership_DateController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $intership_dateModel= new Intership_DateModel;
        // on va chercher toutes les annonces 
        $intership_date= $intership_dateModel->findAll();
        
        //on genere la vue 
        $this->rendu('intership_date/index', ['intership_date' =>$intership_date]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $intership_dateModel= new Intership_DateModel;
 
         //on va chercher un people par rapport a son id 
         $intership_date =$intership_dateModel->find($id);
         //on envoie à la vue 
         $this->rendu('intership_date/read', compact('intership_date'));
     }
}