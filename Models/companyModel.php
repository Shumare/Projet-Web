<?php
namespace Website\Models;

class CompanyModel extends Model
{
    protected $id;
    protected $comp_name;
    protected $comp_activity;
    protected $comp_description;
    protected $comp_phone_number;
    protected $comp_number_employees;
    protected $comp_tutor_rating;
    protected $comp_current_intern;
    protected $comp_active;
    
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
     * Get the value of comp_name
     */ 
    public function getComp_name()
    {
        return $this->comp_name;
    }

    /**
     * Set the value of comp_name
     *
     * @return  self
     */ 
    public function setComp_name($comp_name)
    {
        $this->comp_name = $comp_name;

        return $this;
    }

    /**
     * Get the value of comp_description
     */ 
    public function getComp_description()
    {
        return $this->comp_description;
    }

    /**
     * Set the value of comp_description
     *
     * @return  self
     */ 
    public function setComp_description($comp_description)
    {
        $this->comp_description = $comp_description;

        return $this;
    }

    /**
     * Get the value of comp_phone_number
     */ 
    public function getComp_phone_number()
    {
        return $this->comp_phone_number;
    }

    /**
     * Set the value of comp_phone_number
     *
     * @return  self
     */ 
    public function setComp_phone_number($comp_phone_number)
    {
        $this->comp_phone_number = $comp_phone_number;

        return $this;
    }

    /**
     * Get the value of comp_number_employees
     */ 
    public function getComp_number_employees()
    {
        return $this->comp_number_employees;
    }

    /**
     * Set the value of comp_number_employees
     *
     * @return  self
     */ 
    public function setComp_number_employees($comp_number_employees)
    {
        $this->comp_number_employees = $comp_number_employees;

        return $this;
    }

    /**
     * Get the value of comp_tutor_rating
     */ 
    public function getComp_tutor_rating()
    {
        return $this->comp_tutor_rating;
    }

    /**
     * Set the value of comp_tutor_rating
     *
     * @return  self
     */ 
    public function setComp_tutor_rating($comp_tutor_rating)
    {
        $this->comp_tutor_rating = $comp_tutor_rating;

        return $this;
    }

    /**
     * Get the value of comp_current_intern
     */ 
    public function getComp_current_intern()
    {
        return $this->comp_current_intern;
    }

    /**
     * Set the value of comp_current_intern
     *
     * @return  self
     */ 
    public function setComp_current_intern($comp_current_intern)
    {
        $this->comp_current_intern = $comp_current_intern;

        return $this;
    }

    /**
     * Get the value of comp_active
     */ 
    public function getComp_active()
    {
        return $this->comp_active;
    }

    /**
     * Set the value of comp_active
     *
     * @return  self
     */ 
    public function setComp_active($comp_active)
    {
        $this->comp_active = $comp_active;

        return $this;
    }
}