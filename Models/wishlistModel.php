<?php
namespace Website\Models;

class WishlistModel extends Model
{
    protected $id;
    protected $id_student;
    

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
     * Get the value of id_student
     */ 
    public function getId_student()
    {
        return $this->id_student;
    }

    /**
     * Set the value of id_student
     *
     * @return  self
     */ 
    public function setId_student($id_student)
    {
        $this->id_student = $id_student;

        return $this;
    }
}