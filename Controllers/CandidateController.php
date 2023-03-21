<?php
namespace Website\Controllers;

use Website\Models\CandidateModel;

class CandidateController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $candidateModel= new CandidateModel;
        // on va chercher toutes les annonces 
        $candidate= $candidateModel->findAll();
        
        //on genere la vue 
        $this->rendu('candidate/index', ['candidate' =>$candidate]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $candidateModel= new CandidateModel;

        //on va chercher un people par rapport a son id 
        $candidate =$candidateModel->find($id);
        //on envoie à la vue 
        $this->rendu('candidate/read', compact('candidate'));
    }
}