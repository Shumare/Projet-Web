<?php

namespace Website\Controllers;

use Website\Models\InternshipModel;

class internshipfilterController extends Controller 
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $internshipfilterModel= new InternshipModel;
        // on va chercher toutes les annonces
        $internshipfilter=$internshipfilterModel->pagination(0);
       
        //on genere la vue 
        $this->rendu(array("internshipfilter/index"), ['internshipfilter' =>$internshipfilter]);
    }

    public function next()
    {
        //on instacie le model coresspondant à la table people
        $internshipfilterModel= new InternshipModel;
        // on va chercher toutes les annonces
        
        $internshipfilter=$internshipfilterModel->pagination(1);
        
        
        //on genere la vue 
        $this->rendu(array("internshipfilter/index"), ['internshipfilter' =>$internshipfilter]);
    }

    public function previous()
    {
        //on instacie le model coresspondant à la table people
        $internshipfilterModel= new InternshipModel;
        // on va chercher toutes les annonces
        
        $internshipfilter=$internshipfilterModel->pagination(-1);
        
        
        //on genere la vue 
        $this->rendu(array("internshipfilter/index"), ['internshipfilter' =>$internshipfilter]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $internshipfilterModel= new InternshipModel;
 
         //on va chercher un people par rapport a son id 
         $internshipfilter =$internshipfilterModel->find($id);
         //on envoie à la vue 
         $this->rendu(array('internshipfilter/read'), compact('internshipfilter'));
     }

}