<?php
namespace Website\Models;

class SearchsModel extends Model
{
    protected $people_id;
    protected $id_company;
    

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }



    /**
     * Get the value of people_id
     */ 
    public function getPeople_id()
    {
        return $this->people_id;
    }

    /**
     * Set the value of people_id
     *
     * @return  self
     */ 
    public function setPeople_id($people_id)
    {
        $this->people_id = $people_id;

        return $this;
    }

    /**
     * Get the value of id_company
     */ 
    public function getId_company()
    {
        return $this->id_company;
    }

    /**
     * Set the value of id_company
     *
     * @return  self
     */ 
    public function setId_company($id_company)
    {
        $this->id_company = $id_company;

        return $this;
    }
}