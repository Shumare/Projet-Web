<?php
namespace Website\Models;

class SkillModel extends Model
{
    protected $id;
    protected $skill;
    

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
     * Get the value of skill
     */ 
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set the value of skill
     *
     * @return  self
     */ 
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }
}