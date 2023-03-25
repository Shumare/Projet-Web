<?php

// namespace Website\Controllers;

// use Website\Models\AccountModel;

// class LoginController extends Controller
// {
//     public function index()
//     {
        
//         $this->rendu(array('login/index'), [""]);
//     }
    
//     public function connexion()
//     {

//         $account = new AccountModel;
//         $a = $account->findBy(['acc_email'=>$_POST["email"],'acc_password'=>$_POST["password"]]);
//         if(count($a)==0){
//             $this->rendu(array('login/REFUSER'), [""]);
//         }else{
//             $this->rendu(array('login/CONNECTER'), [""]);
//         }
//         //on genere la vue 
        
//     }
//     //afficher people
    
// }