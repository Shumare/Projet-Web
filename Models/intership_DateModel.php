<?php
namespace Website\Models;

class Intership_DateModel extends Model
{
    protected $id;
    protected $dates;
    

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
     * Get the value of dates
     */ 
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Set the value of dates
     *
     * @return  self
     */ 
    public function setDates($dates)
    {
        $this->dates = $dates;

        return $this;
    }
}