<?php
namespace Website\Models;

class Intern_RatingModel extends Model
{

    protected $id;
    protected $int_environment;
    protected $int_office_qualities;
    protected $int_wage;
    protected $int_acquired_experience;
    protected $int_supervision_qualities;
    protected $id_company;

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
     * Get the value of int_environment$int_environment
     */ 
    public function getInt_environement()
    {
        return $this->int_environment;
    }

    /**
     * Set the value of int_environment$int_environment
     *
     * @return  self
     */ 
    public function setInt_environement($int_environment)
    {
        $this->int_environment = $int_environment;

        return $this;
    }

    /**
     * Get the value of int_office_qualities
     */ 
    public function getInt_office_qualities()
    {
        return $this->int_office_qualities;
    }

    /**
     * Set the value of int_office_qualities
     *
     * @return  self
     */ 
    public function setInt_office_qualities($int_office_qualities)
    {
        $this->int_office_qualities = $int_office_qualities;

        return $this;
    }

    /**
     * Get the value of int_wage
     */ 
    public function getInt_wage()
    {
        return $this->int_wage;
    }

    /**
     * Set the value of int_wage
     *
     * @return  self
     */ 
    public function setInt_wage($int_wage)
    {
        $this->int_wage = $int_wage;

        return $this;
    }

    /**
     * Get the value of int_acquired_experience
     */ 
    public function getInt_acquired_experience()
    {
        return $this->int_acquired_experience;
    }

    /**
     * Set the value of int_acquired_experience
     *
     * @return  self
     */ 
    public function setInt_acquired_experience($int_acquired_experience)
    {
        $this->int_acquired_experience = $int_acquired_experience;

        return $this;
    }

    /**
     * Get the value of int_supervision_qualities
     */ 
    public function getInt_supervision_qualities()
    {
        return $this->int_supervision_qualities;
    }

    /**
     * Set the value of int_supervision_qualities
     *
     * @return  self
     */ 
    public function setInt_supervision_qualities($int_supervision_qualities)
    {
        $this->int_supervision_qualities = $int_supervision_qualities;

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