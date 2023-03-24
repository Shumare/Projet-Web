<?php

namespace Website\Controllers;

use Website\Models\CompanyModel;
use Website\Models\Intern_ratingModel;

class Company_detailsController extends Controller 
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $Company_detailsModel= new CompanyModel;
        // on va chercher toutes les annonces 
        $Company_details= $Company_detailsModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('Company_details/index'), ['Company_details' =>$Company_details]);
    }

     //afficher people
     public function read(int $id )
     {
        
         // on instancie le model
         $Company_details= new CompanyModel;
         $intern_rating= new Intern_ratingModel;
         //on va chercher un people par rapport a son id 
         $Company_details =$Company_details->find($id);
         $intern_rating = $intern_rating->findBy(['id_company'=>$id])[0];
         
         //on envoie à la vue 
         $this->rendu(array('Company_details/read'),array_merge(compact('Company_details'),compact('intern_rating')) );
     }

}