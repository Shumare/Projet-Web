<?php

namespace Website\Controllers;
use Website\Models\RoleModel;

class RoleController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $roleModel= new RoleModel;
        // on va chercher toutes les annonces 
        $role= $roleModel->findAll();
        
        //on genere la vue 
        $this->rendu('role/index', ['role' =>$role]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $roleModel= new RoleModel;
 
         //on va chercher un people par rapport a son id 
         $role =$roleModel->find($id);
         //on envoie à la vue 
         $this->rendu('role/read', compact('role'));
     }
}