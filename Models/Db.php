<?php
namespace Website\Models;

use PDO;
use PDOException;

class Db extends PDO
{
    //instance unique de la classe 
    private static $instance;

    //info de connexion 
    private const DBHOST= '90.70.95.253';
    private const DBUSER = 'Grp6';
    private const DBPASS = 'Pass.GR6';
    private const DBNAME = 'website';
    private $connection;

    private function  __construct()
    {
        $_dsn ='mysql:dbname='.self::DBNAME.';host=' .self::DBHOST;

        try{
            parent::__construct($_dsn, self::DBUSER, self:: DBPASS);
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
        }

        $this->connection = new PDO($_dsn, self::DBUSER, self::DBPASS);
        
    }

    public static function getInstance():self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}