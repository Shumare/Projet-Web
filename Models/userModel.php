<?php
namespace Website\Models;
use Website\Models\Db;


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
        $query = "SELECT account.acc_email, account.acc_password,account.id_people, role.role AS user_role FROM account INNER JOIN role ON account.id_role = role.id WHERE acc_email = ? && acc_password = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$acc_email, $acc_password]);
        $user = $stmt->fetch();
        if ($user != null) {
            $_SESSION['acc_email'] = $user['acc_email'];
            $_SESSION['user_id'] = $user['id_people'];
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
            setcookie('login_cookie', $cookie_value, $cookie_expiration, '/', '', false, true); // Stockage du cookie chiffré
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
        unset($_SESSION['user_type']);
        // Suppression du cookie de connexion
        setcookie('login_cookie', '', time() - 3600, '/', '', false, true); // Durée de validité négative pour supprimer le cookie
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
    public function checklogin()
    {
        if (isset($_SESSION['login_cookie']) && isset($_COOKIE['login_cookie'])) {
            if ($_COOKIE['login_cookie'] == $_SESSION['login_cookie']) {
                return true;
            } else {
                $this->logout();
                return false;
            }
        } elseif(isset($_SESSION['login_cookie'])) {
            $this->logout();
            return false;
        }else{
            return false;
        }
    }
}