<?php
namespace Website\Controllers;

use Website\Models\InternshipModel;

class InternshipController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $internshipModel= new InternshipModel;
        // on va chercher toutes les annonces 
        $internship= $internshipModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('internship/index'), ['internship' =>$internship]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $internshipModel= new InternshipModel;

        //on va chercher un people par rapport a son id 
        $internship =$internshipModel->find($id);
        //on envoie à la vue 
        $this->rendu(array('internship/read'), compact('internship'));
    }
}