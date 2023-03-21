<?php
namespace Website\Controllers;

use Website\Models\Intership_DateModel;

class Internship_DateController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $internshipDateModel= new Intership_DateModel;
        // on va chercher toutes les annonces 
        $internshipDate= $internshipDateModel->findAll();
        
        //on genere la vue 
        $this->rendu('internshipDate/index', ['internshipDate' =>$internshipDate]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $internshipDateModel= new Intership_DateModel;

        //on va chercher un people par rapport a son id 
        $internshipDate =$internshipDateModel->find($id);
        //on envoie à la vue 
        $this->rendu('internshipDate/read', compact('internshipDate'));
    }
}