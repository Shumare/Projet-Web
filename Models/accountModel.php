<?php
namespace Website\Models;

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
    public function getAcc_email()
    {
        return $this->acc_email;
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
    public function getId_role()
    {
        return $this->id_role;
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
}