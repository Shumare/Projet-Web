<?php

namespace Website\Controllers;
use Website\Models\UserModel;



class MainController extends Controller
{
    public function index(){
        // verifie si l'utilisateur est connecté
        // $user = new UserModel();
        // $user->checkConnection();
        $_SESSION['current_page'] = 'home';
        $_SESSION['page_title'] = 'Home';
        $this->rendu(array('main/index'));
    }
}