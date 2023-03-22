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
    public function read(int $id)
    {
        // on instancie le model
        
        $accountModel= new AccountModel;

        //on va chercher un people par rapport a son id 
        $account =$accountModel->find($id);
        //on envoie à la vue 
        $this->rendu(array('account/read'), compact('account'));
    }
    
 
   

    public function create(){
        $accountModel= new AccountModel;
        $accountModel->setAcc_email($_POST['acc_email']);
        $accountModel->setAcc_password($_POST['acc_password']);
        $accountModel->setId_people($_POST['id_people']);
        $accountModel->setId_role($_POST['id_role']);
        $account =$accountModel->create($accountModel);

        $this->rendu(array('account/index'), compact('account'));
    }

    public function dirige(){
        $accountModel= new AccountModel;
        $account =$accountModel->find(3);
        $this->rendu(array('account/dirige'), compact('account'));
    }
    
}