<?php

namespace Website\Controllers;

use Website\Models\CompanyModel;

class CompanyController extends Controller 
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $companyModel= new CompanyModel;
        // on va chercher toutes les annonces 
        $company= $companyModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('company/index'), ['company' =>$company]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $companyModel= new CompanyModel;
 
         //on va chercher un people par rapport a son id 
         $company =$companyModel->find($id);
         //on envoie à la vue 
         $this->rendu(array('company/read'), compact('company'));
     }
}