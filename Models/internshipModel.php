<?php
namespace Website\Models;

class InternshipModel extends Model
{
    protected $id_internship;
    protected $inter_activity;
    protected $inter_salary;
    protected $inter_description;
    protected $inter_number_place;
    protected $id_company;
    protected $id_date;
    

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
     * Get the value of inter_activity
     */ 
    public function getInter_activity()
    {
        return $this->inter_activity;
    }

    /**
     * Set the value of inter_activity
     *
     * @return  self
     */ 
    public function setInter_activity($inter_activity)
    {
        $this->inter_activity = $inter_activity;

        return $this;
    }

    /**
     * Get the value of inter_salary
     */ 
    public function getInter_salary()
    {
        return $this->inter_salary;
    }

    /**
     * Set the value of inter_salary
     *
     * @return  self
     */ 
    public function setInter_salary($inter_salary)
    {
        $this->inter_salary = $inter_salary;

        return $this;
    }

    /**
     * Get the value of inter_description
     */ 
    public function getInter_description()
    {
        return $this->inter_description;
    }

    /**
     * Set the value of inter_description
     *
     * @return  self
     */ 
    public function setInter_description($inter_description)
    {
        $this->inter_description = $inter_description;

        return $this;
    }

    /**
     * Get the value of inter_number_place
     */ 
    public function getInter_number_place()
    {
        return $this->inter_number_place;
    }

    /**
     * Set the value of inter_number_place
     *
     * @return  self
     */ 
    public function setInter_number_place($inter_number_place)
    {
        $this->inter_number_place = $inter_number_place;

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

    /**
     * Get the value of id_date
     */ 
    public function getId_date()
    {
        return $this->id_date;
    }

    /**
     * Set the value of id_date
     *
     * @return  self
     */ 
    public function setId_date($id_date)
    {
        $this->id_date = $id_date;

        return $this;
    }
}