<?php
namespace Website\Controllers;

use Website\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $_SESSION['page_title'] = 'Login';
        $this->rendu(array('user/index'), [""]);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $user = new UserModel();
            if ($user->login($username, $password)) {
                header('Location: /main/recent');
                exit();
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        }
        $this->rendu(array('/user/index'), [""]);
    }
    
    public function logout()
    {
        $user = new UserModel();
        $user->logout();
        header('Location: /user');
        exit();
    }
}