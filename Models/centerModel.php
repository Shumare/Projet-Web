<?php

namespace Website\Models;

class centerModel extends Model
{
    protected $id;
    protected $center_name;

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }


   
    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

   
    public function getCenter_name()
    {
        return $this->center_name;
    }

    
    public function setCenter_name($center_name)
    {
        $this->center_name = $center_name;

        return $this;
    }
}