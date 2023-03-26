<?php

namespace Website\Controllers;
//use Website\Models\UserModel;



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

    public function start()
    {
        //on retire le dernier slash éventuel de l'URL
        $uri = $_SERVER['REQUEST_URI'];

        //on verifie que l'uri n'est pas vide et se termine par un/
        if (!empty($uri) && $uri != '/' && $uri[-1] === "/") {
            $uri = substr($uri, 0, -1);
            // on envoie un code de redirection permanente
            http_response_code(301);
            //on redirige vers l'URL sans /
            header('Location: ' . $uri);
        }
        //on gère les parametres d'URL
        //p= controller/methode/parametres
        //on sépare les parametres dans un tableau
        $params = explode('/', $_GET['p']);
        if ($params[0] != '') {
            //on a au moins un parametre
            //recupere le nom du controller
            $controller = '\\Website\\Controllers\\' . ucfirst(array_shift($params)) . 'Controller';

            //on instancie le controleur
            $controller = new $controller();

            //on recupere le deuxieme parametre d'url
            $action = (isset($params[0])) ? array_shift($params) : 'index';

            if (method_exists($controller, $action)) {
                //si il reste des parametres on les passe à la methode
                (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();
            } else {
                http_response_code(404);
                echo "la page recherchée n'exite pas";
            }


        } else {
            //pas de paramètres
            //on instacie le contorller par defaut
            $this->index();

        }
    }

    public function startlogin()
    {
        if (($_SERVER['REQUEST_URI'] == '/user/index')) {
            $usrctl = new UserController;
            $usrctl->index();
        } elseif ($_SERVER['REQUEST_URI'] == '/user/login') {
            $usrctl = new UserController;
            $usrctl->login();
        } else {
            header('Location: /user/index');
            //$this->start();
        }
    }
}