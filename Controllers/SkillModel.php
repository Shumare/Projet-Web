<?php
namespace Website\Controllers;

use Website\Models\SkillModel;

class SkillController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $skillModel= new SkillModel;
        // on va chercher toutes les annonces 
        $skill= $skillModel->findAll();
        
        //on genere la vue 
        $this->rendu('skill/index', ['skill' =>$skill]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $skillModel= new SkillModel;

        //on va chercher un people par rapport a son id 
        $skill =$skillModel->find($id);
        //on envoie à la vue 
        $this->rendu('skill/read', compact('skill'));
    }
}