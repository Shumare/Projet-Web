<?php

namespace Website\Controllers;

use Website\Models\CityModel;

class CityController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $cityModel= new CityModel;
        // on va chercher toutes les annonces 
        $city= $cityModel->findAll();
        
        //on genere la vue 
        $this->rendu('city/index', ['city' =>$city]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $cityModel= new CityModel;
 
         //on va chercher un people par rapport a son id 
         $city =$cityModel->find($id);
         //on envoie à la vue 
         $this->rendu('city/read', compact('city'));
     }
}