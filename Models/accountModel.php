<?php
namespace Website\Models;
use Website\Models\Db;


class AccountModel extends Model
{

    protected $id;
    protected $acc_password;
    protected $acc_email;
    protected $id_people;
    protected $id_role;

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of acc_password
     */ 
    public function getAcc_password()
    {
        return $this->acc_password;
    }

    /**
     * Set the value of acc_password
     *
     * @return  self
     */ 
    public function setAcc_password($acc_password)
    {
        $this->acc_password = $acc_password;

        return $this;
    }

    /**
     * Get the value of acc_email
     */ 
    public function getAcc_email_From_Id(int $id)
    {
        $this->db = Db::getInstance();
        $query = $this->db->prepare("SELECT acc_email FROM account WHERE id_people = ?");
        $query->execute([$id]);
        $result = $query->fetch();
        return $result->acc_email;
            
    }

    /**
     * Set the value of acc_email
     *
     * @return  self
     */ 
    public function setAcc_email($acc_email)
    {
        $this->acc_email = $acc_email;

        return $this;
    }

    /**
     * Get the value of id_people
     */ 
    public function getId_people()
    {
        return $this->id_people;
    }

    /**
     * Set the value of id_people
     *
     * @return  self
     */ 
    public function setId_people($id_people)
    {
        $this->id_people = $id_people;

        return $this;
    }

    /**
     * Get the value of id_role
     */ 
    public function getId_role($id)
    {
        $query = $this->requete("SELECT id_role FROM account WHERE id_people = ?", [$id]);
        return $query->fetchAll();
    }

    /**
     * Set the value of id_role
     *
     * @return  self
     */ 
    public function setId_role($id_role)
    {
        $this->id_role = $id_role;

        return $this;
    }
    public function deleteaccount(int $id)
    {
        $this->requete("CALL supprimer_utilisateur(?);", [$id]);
        header('Location: /people');
    }
    public function GetIdaccountfromidpeople(int $id)
    {
        $query = $this->requete("SELECT id FROM account where id_people='$id'");
        return $query->fetchAll();
    }
}