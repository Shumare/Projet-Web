<?php

namespace Website\Controllers;

use Website\Models\AccountModel;

class ProfileController extends Controller 
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $profileModel= new AccountModel;
        // on va chercher toutes les annonces
        $profile=$profileModel->findprofile($_SESSION['user_id']);
        echo $_SESSION['user_id']."aaaaa";
        //on genere la vue 
        $this->rendu(array("profile/index"), ['profile' =>$profile]);
    }


}