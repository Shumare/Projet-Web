<?php
namespace Website\Models;

class StockedModel extends Model
{
    protected $id_wishlist;
    protected $id_internship;
    

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }

 

    /**
     * Get the value of id_wishlist
     */ 
    public function getId_wishlist()
    {
        return $this->id_wishlist;
    }

    /**
     * Set the value of id_wishlist
     *
     * @return  self
     */ 
    public function setId_wishlist($id_wishlist)
    {
        $this->id_wishlist = $id_wishlist;

        return $this;
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
}