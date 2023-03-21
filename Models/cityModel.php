<?php

namespace Website\Models;

class CityModel extends Model
{
protected $id;
protected $city_name;

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
 * Get the value of city_name
 */ 
public function getCity_name()
{
return $this->city_name;
}

/**
 * Set the value of city_name
 *
 * @return  self
 */ 
public function setCity_name($city_name)
{
$this->city_name = $city_name;

return $this;
}
}