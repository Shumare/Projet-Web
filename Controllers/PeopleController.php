<?php
namespace Website\Controllers;

use Website\Models\AccountModel;
use Website\Models\PeopleModel;
use Website\Models\CenterModel;
class PeopleController extends Controller
{

    public function index()
    {
        $_SESSION['current_page'] = 'admin_users';
        $_SESSION['page_title'] = 'User Management';
        //on instacie le model coresspondant à la table people
        $peopleModel= new PeopleModel;
        // on va chercher toutes les annonces 
        $people= $peopleModel->findAll();
        $people=$peopleModel->pagination(0);
        //on genere la vue 
        $this->rendu(array('people/index'), ['people' =>$people]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $peopleModel= new PeopleModel;

        //on va chercher un people par rapport a son id 
        $people =$peopleModel->find($id);

        $centerModel= new centerModel;
        
        //on va chercher un people par rapport a son id 
        $center =$centerModel->find($people->id_center);
        //on envoie à la vue 
        $this->rendu(array('people/read'), array_merge(compact('people')));
    }

    public function create(){
        $peopleModel= new PeopleModel;
        $peopleModel->setPeople_firstname($_POST['people_firstname']);
        $peopleModel->setPeople_lastname($_POST['people_lastname']);
        $peopleModel->setPeople_gender($_POST['people_gender']);
        $peopleModel->setId_center($_POST['id_center']);
        $people =$peopleModel->create($peopleModel);
        $people= $peopleModel->findAll();
        $_SESSION['current_page'] = 'admin_users';
        $_SESSION['page_title'] = 'User_managment';
        header('Location: people/');
        //$this->rendu(array('people/index'), compact('people'));
    }

    public function dirige(){
        $peopleModel= new PeopleModel;
        $people =$peopleModel->find(3);
        $this->rendu(array('people/dirige'), compact('people'));
    }
    public function delete( int $id){
        $accountModel = new AccountModel;
        $accountModel->deleteaccount($id);
        header('Location: /people');
        //$this->rendu(array('people/index'), compact('people'));
    }
    public function update()
    {
        $peopleModel= new PeopleModel;
        $id=$peopleModel->setId($_POST['id']);
        $peopleModel->setPeople_firstname($_POST['people_firstname']);
        $peopleModel->setPeople_lastname($_POST['people_lastname']);
        $peopleModel->setPeople_gender($_POST['people_gender']);
        $peopleModel->setId_center($_POST['id_center']);
        $people =$peopleModel->update($_POST['id'], $peopleModel);
        $people= $peopleModel->findAll();
        $this->rendu(array('people/'), compact('people'));
    }

    public function next()
    {
        //on instacie le model coresspondant à la table people
        $peopleModel= new PeopleModel;
        // on va chercher toutes les annonces
        
        $people=$peopleModel->pagination(1);
        
        
        //on genere la vue 
        $this->rendu(array("people/index"), ['people' =>$people]);
    }

    public function previous()
    {
        //on instacie le model coresspondant à la table people
        $peopleModel= new PeopleModel;
        // on va chercher toutes les annonces
        
        $people=$peopleModel->pagination(-1);
        
        
        //on genere la vue 
        $this->rendu(array("people/index"), ['people' =>$people]);
    }
   

}