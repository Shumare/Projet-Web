<?php

namespace Website\Controllers;



class MainController extends Controller
{
    protected $title="Index";
    protected $page = "home";
    protected $user_role="student";

    public function index(){
       $contenu = $this->rendu(['index']);
        $this->display_index(page: $this->page, title: $this->title, user_role: $this->user_role, contenu: $contenu);
    }

    public function  display_index($page, $title, $user_role, $contenu, bool $nav=true)
    {
        $smarty = Controller::init_smarty();
        
        $smarty->assign('page', $page);
        $smarty->assign('title', $title);
        $smarty->assign('user_role', $user_role);
        $smarty->assign('nav', $nav);
        $smarty->assign('contenu', $contenu);


        //$smarty->display('smarty/templates/header.tpl');
        $smarty->display('smarty/templates/index.tpl');
        ///$smarty->display('smarty/templates/footer.tpl');

    }
}