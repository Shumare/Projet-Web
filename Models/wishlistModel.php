<?php
namespace Website\Models;

class WishlistModel extends Model
{
    protected $id;
    protected $id_student;
    

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
     * Get the value of id_student
     */ 
    public function getId_student()
    {
        return $this->id_student;
    }

    /**
     * Set the value of id_student
     *
     * @return  self
     */ 
    public function setId_student($id_student)
    {
        $this->id_student = $id_student;

        return $this;
    }

    public function createWish(int $id)
    {
        
        $this->requete("INSERT INTO wishlist (people_id) VALUES ($_SESSION[user_id])");
        $wishlist = new WishlistModel();
        $last = $wishlist->requete("SELECT * from wishlist where people_id=$_SESSION[user_id] order by people_id asc ");
        $all = $last->fetchAll();
        $all=$all[sizeof($all)-1];
        var_dump($all->id);
        $this->requete("INSERT INTO stocked (id_intership,id_wishlist) VALUES ($id,$all->id)");
    }
 
}