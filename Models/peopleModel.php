<?php

namespace Website\Models;

class PeopleModel extends Model
{
    protected $id;
    protected $people_firstname;
    protected $people_lastname;
    protected $people_gender;
    protected $id_center;
    protected $db;





    
    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
        $this->db = Db::getInstance()->getConnection();
    }

    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
    public function getPeople_firstname()
    {
        return $this->people_firstname;
    }

   
    public function setPeople_firstname($people_firstname)
    {
        $this->people_firstname = $people_firstname;

        return $this;
    }

   
    public function getPeople_lastname()
    {
        return $this->people_lastname;
    }

   
    public function setPeople_lastname($people_lastname)
    {
        $this->people_lastname = $people_lastname;

        return $this;
    }

   
    public function getPeople_gender()
    {
        return $this->people_gender;
    }

    
    public function setPeople_gender($people_gender)
    {
        $this->people_gender = $people_gender;

        return $this;
    }

    
    public function getId_center()
    {
        return $this->id_center;
    }

   
    public function setId_center($id_center)
    {
        $this->id_center = $id_center;

        return $this;
    }

    public function getlastid()
    {
        $query = $this->requete("SELECT * FROM people order by id desc limit 1");  
        return $query->fetchAll();
    }
}