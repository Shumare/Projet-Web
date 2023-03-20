<?php
namespace Website\Models;

class NeedModel extends Model
{
    protected $id_internship;
    protected $id_skill;
    

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }



    /**
     * Get the value of id_internship
     */ 
    public function getId_internship()
    {
        return $this->id_internship;
    }

    /**
     * Set the value of id_internship
     *
     * @return  self
     */ 
    public function setId_internship($id_internship)
    {
        $this->id_internship = $id_internship;

        return $this;
    }

    /**
     * Set the value of id_skill
     *
     * @return  self
     */ 
    public function setId_skill($id_skill)
    {
        $this->id_skill = $id_skill;

        return $this;
    }
}