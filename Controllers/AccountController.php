<?php
namespace Website\Controllers;

use Website\Models\AccountModel;
use Website\Models\PeopleModel;
use Website\Models\Model;

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
        $peopleMopdel= new PeopleModel;
        if(MD5($_POST['acc_password']) == MD5($_POST['acc_password_confirm']))
        {
            $accountModel->setAcc_password(MD5($_POST['acc_password']));
        }
        else
        {
            echo "Les mots de passe ne correspondent pas";
            $this->rendu(array('/account/dirige'),['']);
            exit();
        }
        $peopleMopdel->setPeople_firstname($_POST['people_firstname']);
        $peopleMopdel->setPeople_lastname($_POST['people_lastname']);
        $peopleMopdel->setPeople_gender($_POST['people_gender']);
        $peopleMopdel->setId_center($_POST['id_center']);
        $peopleMopdel->create($peopleMopdel);
        $id_people = $peopleMopdel->getlastid();
        extract($id_people);
        $id_p = $id_people[0]->id;
        $accountModel->setId_people($id_p);
        $accountModel->setAcc_email($_POST['acc_email']);
        $account = $accountModel->setId_role($_POST['id_role']);
        $account = $accountModel->create($accountModel);
        $people = $peopleMopdel->findAll();
        $this->rendu(array('people/index'), compact('people'));
    }

    public function dirige(){
        $accountModel= new AccountModel;
        $account =$accountModel->find(3);
        $this->rendu(array('account/dirige'), compact('account'));
    }
    public function delete( int $id){
        $accountModel= new accountModel;
        $accountModel->deleteaccount($id);
        header('Location: /people');
        //$accountModel->findAll();
        //$this->rendu(array("people/delete/$id"), compact('account'));
    }
    public function update()
    {
        $accountModel= new AccountModel;
        $peopleMopdel= new PeopleModel;
        $peopleMopdel->setPeople_firstname($_POST['people_firstname']);
        $peopleMopdel->setPeople_lastname($_POST['people_lastname']);
        $peopleMopdel->setPeople_gender($_POST['people_gender']);
        $peopleMopdel->setId_center($_POST['id_center']);
        $peopleMopdel->create($peopleMopdel);

        $accountModel->setAcc_email($_POST['acc_email']);
        $accountModel->setAcc_password($_POST['acc_password']);
        $accountModel->setId_people($_POST['id_people']);
        $account = $accountModel->update($_POST['id'], $accountModel);
        $account = $accountModel->findAll();
        $this->rendu(array('account/index'), compact('account'));
    }
}