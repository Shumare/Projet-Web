<?php
namespace Website\Models;

class AddressModel extends Model
{
    protected $id;
    protected $add_postcode;
    protected $add_number;
    protected $add_typeway;
    protected $add_name;
    protected $id_city;
    protected $id_country;
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
     * Get the value of add_postcode
     */ 
    public function getAdd_postcode()
    {
        return $this->add_postcode;
    }

    /**
     * Set the value of add_postcode
     *
     * @return  self
     */ 
    public function setAdd_postcode($add_postcode)
    {
        $this->add_postcode = $add_postcode;

        return $this;
    }

    /**
     * Get the value of add_number
     */ 
    public function getAdd_number()
    {
        return $this->add_number;
    }

    /**
     * Set the value of add_number
     *
     * @return  self
     */ 
    public function setAdd_number($add_number)
    {
        $this->add_number = $add_number;

        return $this;
    }

    /**
     * Get the value of add_typeway
     */ 
    public function getAdd_typeway()
    {
        return $this->add_typeway;
    }

    /**
     * Set the value of add_typeway
     *
     * @return  self
     */ 
    public function setAdd_typeway($add_typeway)
    {
        $this->add_typeway = $add_typeway;

        return $this;
    }

    /**
     * Get the value of add_name
     */ 
    public function getAdd_name()
    {
        return $this->add_name;
    }

    /**
     * Set the value of add_name
     *
     * @return  self
     */ 
    public function setAdd_name($add_name)
    {
        $this->add_name = $add_name;

        return $this;
    }

    /**
     * Get the value of id_city
     */ 
    public function getId_city()
    {
        return $this->id_city;
    }

    /**
     * Set the value of id_city
     *
     * @return  self
     */ 
    public function setId_city($id_city)
    {
        $this->id_city = $id_city;

        return $this;
    }

    /**
     * Get the value of id_country
     */ 
    public function getId_country()
    {
        return $this->id_country;
    }

    /**
     * Set the value of id_country
     *
     * @return  self
     */ 
    public function setId_country($id_country)
    {
        $this->id_country = $id_country;

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