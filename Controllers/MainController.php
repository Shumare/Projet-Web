<?php

namespace Website\Controllers;
use Website\Models\UserModel;



class MainController extends Controller
{
    public function index(){
        // verifie si l'utilisateur est connecté
        // $user = new UserModel();
        // $user->checkConnection();
        $this->rendu(array('main/index'));
    }
}