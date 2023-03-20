<?php
namespace Website\Models;

class PromotionModel extends Model{
    protected $id;
    protected $promo_name;
    protected $id_tutor;

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }


    /**
     * Get the value of promo_name
     */ 
    public function getPromo_name()
    {
        return $this->promo_name;
    }

    /**
     * Set the value of promo_name
     *
     * @return  self
     */ 
    public function setPromo_name($promo_name)
    {
        $this->promo_name = $promo_name;

        return $this;
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
     * Get the value of id_tutor
     */ 
    public function getId_tutor()
    {
        return $this->id_tutor;
    }

    /**
     * Set the value of id_tutor
     *
     * @return  self
     */ 
    public function setId_tutor($id_tutor)
    {
        $this->id_tutor = $id_tutor;

        return $this;
    }
}