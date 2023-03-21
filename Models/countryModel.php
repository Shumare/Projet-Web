<?php
namespace Website\Models;

class CountryModel extends Model
{
    protected $id;
    protected $country_name;

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
     * Get the value of country_name
     */ 
    public function getCountry_name()
    {
        return $this->country_name;
    }

    /**
     * Set the value of country_name
     *
     * @return  self
     */ 
    public function setCountry_name($country_name)
    {
        $this->country_name = $country_name;

        return $this;
    }
}