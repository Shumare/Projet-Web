<?php
namespace Website\Controllers;

use Website\Models\AccountModel;

class AccountController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $accountModel= new AccountModel;
        // on va chercher toutes les annonces 
        $account= $accountModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('account/index'), ['account' =>$account]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $accountModel= new AccountModel;

        //on va chercher un people par rapport a son id 
        $account =$accountModel->find($id);
        //on envoie à la vue 
        $this->rendu(array('account/read'), compact('account'));
    }
}