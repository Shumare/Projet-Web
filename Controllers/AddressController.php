<?php

namespace Website\Controllers;

use Website\Models\AddressModel;

class AddressController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $addressModel= new AddressModel;
        // on va chercher toutes les annonces 
        $address= $addressModel->findAll();
        
        //on genere la vue 
        $this->rendu('address/index', ['address' =>$address]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $addressModel= new AddressModel;

        //on va chercher un people par rapport a son id 
        $address =$addressModel->find($id);
        //on envoie à la vue 
        $this->rendu('address/read', compact('address'));
    }
}