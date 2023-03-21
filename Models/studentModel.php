<?php
namespace Website\Models;

class StudentModel extends Model
{   
    protected $id;
    protected $id_promotion;
    protected $id_people;
    
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
     * Get the value of id_promotion
     */ 
    public function getId_promotion()
    {
        return $this->id_promotion;
    }

    /**
     * Set the value of id_promotion
     *
     * @return  self
     */ 
    public function setId_promotion($id_promotion)
    {
        $this->id_promotion = $id_promotion;

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
}
