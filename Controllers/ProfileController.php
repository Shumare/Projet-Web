<?php

namespace Website\Controllers;

use Website\Models\AccountModel;
use Website\Models\InternshipModel;
class ProfileController extends Controller 
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $profileModel= new AccountModel;
        // on va chercher toutes les annonces
        $profile=$profileModel->findprofile($_SESSION['user_id']);
        //on genere la vue 
        $internshipfilterModel= new InternshipModel;
        $internshipfilter=$internshipfilterModel->paginationfilterwish(0,$_SESSION['user_id']);
        
    $this->rendu(array("profile/index",'profile/wishlist'),array_merge( compact('profile'),compact('internshipfilter')));
        
        
    }
    public function next()
    {
        //on instacie le model coresspondant à la table people
        $profileModel= new AccountModel;
        // on va chercher toutes les annonces
        $profile=$profileModel->findprofile($_SESSION['user_id']);
        //on genere la vue 
        $internshipfilterModel= new InternshipModel;
        $internshipfilter=$internshipfilterModel->paginationfilterwish(1,$_SESSION['user_id']);
        $this->rendu(array("profile/index",'profile/wishlist'),array_merge( compact('profile'),compact('internshipfilter')));
    }
    public function previous()
    {
        //on instacie le model coresspondant à la table people
        $profileModel= new AccountModel;
        // on va chercher toutes les annonces
        $profile=$profileModel->findprofile($_SESSION['user_id']);
        //on genere la vue 
        $internshipfilterModel= new InternshipModel;
        $internshipfilter=$internshipfilterModel->paginationfilterwish(-1,$_SESSION['user_id']);
        $this->rendu(array("profile/index",'profile/wishlist'),array_merge( compact('profile'),compact('internshipfilter')));
    }

    
}