<?php
namespace Website\Models;

use Website\Main\Db;

class UserModel extends Model
{
    protected $db;

    public function __construct()
    {
        //$class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        //$this->table=strtolower(str_replace('Model','',$class));
        $this->db = Db::getInstance()->getConnection();
    }

    public function register($username, $password)
    {
        $hashed_password = md5($password);
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$username, $hashed_password]);
    }

    public function login($acc_email, $acc_password)
    {
        $query = "SELECT account.acc_email, account.acc_password, role.role AS user_role FROM account INNER JOIN role ON account.id_role = role.id WHERE acc_email = ? && acc_password = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$acc_email, $acc_password]);
        $user = $stmt->fetch();
        if ($user != null) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_role'] = $user['user_role'];
            // Génération d'un identifiant de session aléatoire
            $session_id = bin2hex(random_bytes(16));

            // Stockage de l'identifiant de session dans la session PHP
            $_SESSION['session_id'] = $session_id;

            // Génération d'un cookie de connexion chiffré
            $cookie_data = $acc_email . '|' . $session_id;
            $encrypted_cookie_data = openssl_encrypt($cookie_data, 'aes-256-cbc', $this->cookie_key, OPENSSL_RAW_DATA);
            $cookie_value = base64_encode($encrypted_cookie_data);
            $cookie_expiration = time() + (24 * 60 * 60); // Durée de validité du cookie : 1 jours
            setcookie('login_cookie', $cookie_value, $cookie_expiration, '/', '', true, true); // Stockage du cookie chiffré
            $_SESSION['login_cookie'] = $cookie_value;

            // Connexion réussie
            return true;
        }
        return false;
    }

    public function logout()
    {
        // Suppression de l'identifiant de session dans la session PHP
        unset($_SESSION['session_id']);

        // Suppression du cookie de connexion
        setcookie('login_cookie', '', time() - 3600, '/', '', true, true); // Durée de validité négative pour supprimer le cookie
        session_destroy();
        // Déconnexion réussie
        return true;
    }

    public function isauth()
    {
        if ($_SESSION['user_role'] == 'admin' || $_SESSION['user_role'] == 'tutor') {
            return true;
        } else {
            return false;
        }
    }

//   public function checkConnection()
//   {          
//       if(!isset($_SESSION['login_cookie'])){
//           // L'utilisateur n'a pas de cookie de connexion : redirection vers la page de connexion
//           header('Location: /user/index');
//           exit;
//           }

//           // Déchiffrement du cookie de connexion
//           $encrypted_cookie_data = base64_decode($_COOKIE['login_cookie']);
//           $cookie_data = openssl_decrypt($encrypted_cookie_data, 'aes-256-cbc', $this->cookie_key, OPENSSL_RAW_DATA);
//           list($username, $session_id) = explode('|', $cookie_data);

//           // Vérification que l'identifiant de session correspond à celui stocké dans la session PHP
//           if ($session_id !== $_SESSION['session_id']) {
//               // L'identifiant de session ne correspond pas : déconnexion et redirection vers la page de connexion
//               $this->logout();
//               header('Location: /user/login');
//               exit;
//           }

//           // Vérification que l'utilisateur a les privilèges requis pour accéder à la page
//           if (isset($_SESSION['user_type'])) {
//               // L'utilisateur n'a pas les privilèges requis : redirection vers la page d'accueil
//               header('Location: /');
//               exit;
//           }
//   }
}