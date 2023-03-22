<?php
namespace Website\Controllers;

use Website\Models\PeopleModel;
use Website\Models\CenterModel;
class PeopleController extends Controller
{

    public function index()
    {
        //on instacie le model coresspondant à la table people
        $peopleModel= new PeopleModel;
        // on va chercher toutes les annonces 
        $people= $peopleModel->findAll();
        
        //on genere la vue 
        $contenu = $this->rendu(array('people/index'), ['people' =>$people]);
        $this->display_index(/*page: $this->page, title: $this->title, user_role: $this->user_role,*/contenu: $contenu);
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
        $contenu = $this->rendu(array('people/read','center/read'), array_merge(compact('center'),compact('people')));
        $this->display_index(/*page: $this->page, title: $this->title, user_role: $this->user_role,*/contenu: $contenu);
    }
 
     public function  display_index(/*$page, $title, $user_role,*/ $contenu/*, bool $nav=true*/)
     {
         $smarty = Controller::init_smarty();
         
         /*$smarty->assign('page', $page);
         $smarty->assign('title', $title);
         $smarty->assign('user_role', $user_role);
         $smarty->assign('nav', $nav);*/
         $smarty->assign('contenu', $contenu);
 
 
         //$smarty->display('smarty/templates/header.tpl');
         $smarty->display('smarty/templates/people/index.tpl');
         ///$smarty->display('smarty/templates/footer.tpl');
 
     }
}