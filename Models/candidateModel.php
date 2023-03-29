<?php
namespace Website\Models;

class CandidateModel extends Model
{
    protected $id_intership;
    protected $id_student;
    protected $cand_cv;
    protected $cand_date;
    protected $cand_motivation_letter;
    protected $cand_step;
    
    

    public function __construct()
    {
        //$this-> table = 'people';
        $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
        $this->table=strtolower(str_replace('Model','',$class));
    }



    /**
     * Get the value of id_intership
     */ 
    public function getid_intership()
    {
        return $this->id_intership;
    }

    /**
     * Set the value of id_intership
     *
     * @return  self
     */ 
    public function setid_intership($id_intership)
    {
        $this->id_intership = $id_intership;

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

    /**
     * Get the value of cand_cv
     */ 
    public function getCand_cv()
    {
        return $this->cand_cv;
    }

    /**
     * Set the value of cand_cv
     *
     * @return  self
     */ 
    public function setCand_cv($cand_cv)
    {
        $this->cand_cv = $cand_cv;

        return $this;
    }

    /**
     * Get the value of cand_date
     */ 
    public function getCand_date()
    {
        return $this->cand_date;
    }

    /**
     * Set the value of cand_date
     *
     * @return  self
     */ 
    public function setCand_date($cand_date)
    {
        $this->cand_date = $cand_date;

        return $this;
    }

    /**
     * Get the value of cand_motivation_letter
     */ 
    public function getCand_motivation_letter()
    {
        return $this->cand_motivation_letter;
    }

    /**
     * Set the value of cand_motivation_letter
     *
     * @return  self
     */ 
    public function setCand_motivation_letter($cand_motivation_letter)
    {
        $this->cand_motivation_letter = $cand_motivation_letter;

        return $this;
    }

    /**
     * Get the value of cand_step
     */ 
    public function getCand_step()
    {
        return $this->cand_step;
    }

    /**
     * Set the value of cand_step
     *
     * @return  self
     */ 
    public function setCand_step($cand_step)
    {
        $this->cand_step = $cand_step;

        return $this;
    }
}