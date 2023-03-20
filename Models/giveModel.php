<?php
namespace Website\Models;

class GiveModel extends Model
{
    protected $id_intern_rating;
    protected $id_student;
    

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }



    /**
     * Get the value of id_intern_rating
     */ 
    public function getId_intern_rating()
    {
        return $this->id_intern_rating;
    }

    /**
     * Set the value of id_intern_rating
     *
     * @return  self
     */ 
    public function setId_intern_rating($id_intern_rating)
    {
        $this->id_intern_rating = $id_intern_rating;

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