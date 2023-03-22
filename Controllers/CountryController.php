<?php

namespace Website\Controllers;

use Website\Models\CountryModel;

class CountryController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $countryModel= new CountryModel;
        // on va chercher toutes les annonces 
        $country= $countryModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('country/index'), ['country' =>$country]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $countryModel= new CountryModel;
 
         //on va chercher un people par rapport a son id 
         $country =$countryModel->find($id);
         //on envoie à la vue 
         $this->rendu(array('country/read'), compact('country'));
     }
}