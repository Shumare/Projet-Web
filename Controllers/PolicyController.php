<?php

namespace Website\Controllers;
use Website\Models\SkillModel;

class PolicyController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $skillModel= new SkillModel;
        // on va chercher toutes les annonces 
        $skill= $skillModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('policy/index'), ['skill' =>$skill]);
    }
}