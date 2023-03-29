<?php
namespace Website\Models;

use Website\Models\Intership_DateModel;

class InternshipModel extends Model
{
    protected $id;
    protected $inter_activity;
    protected $inter_salary;
    protected $intern_description;
    protected $inter_number_place;
    protected $id_company;
    protected $id_date;
    protected $inter_duration;
    protected $inter_publication_date;
    protected $interCreationDate;
    protected $interStartDate;
    

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
    public function getIntern_description()
    {
        return $this->intern_description;
    }

    /**
     * Set the value of inter_description
     *
     * @return  self
     */ 
    public function setIntern_description($intern_description)
    {
        $this->intern_description = $intern_description;

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

    /**
     * Get the value of inter_duration
     */ 
    public function getInter_duration()
    {
        return $this->inter_duration;
    }

    /**
     * Set the value of inter_duration
     *
     * @return  self
     */ 
    public function setInter_duration($inter_duration)
    {
        $this->inter_duration = $inter_duration;

        return $this;
    }
    
    public function getinter_publication_date()
    {
        return $this->inter_publication_date;
    }

    /**
     * Set the value of inter_duration
     *
     * @return  self
     */ 
    public function setinter_start_date($id)
    {
        $this->interStartDate = $id;

        return $this;
    }
    public function setinter_publication_date()
    {
        $this->inter_publication_date = date_create('now')->format('Y-m-d');
    }

    public function getInterCreationDate()
    {
        return $this->interCreationDate;
    }
    //get id_date and date
    public function getDate($id = NULL)
    {
        $query = $this->requete("call website.get_internship(?);",[$id]); 
        $date = $query->fetchAll();
        return $date;
    }
    public function formatDatepickerToMySql($date) {
        if ($date != FALSE) {
            $dateArr = explode("-", $date);
            $newDate = $dateArr[0] . '-' . $dateArr[1] . '-' . $dateArr[2];
            return $newDate;
        }
        return FALSE;
    }
    //get last id
    public function getLastIdPlusOne()
    {
        $query = $this->requete("SELECT MAX(id) as id FROM internship;"); 
        $id = $query->fetchAll();
        $id = $id[0]->id + 1;
        return $id;
    }
    public function getallAttributeswhitID($id)
    {
        $query = $this->requete("call website.Internship_From_ID($id);"); 
        $intern = $query->fetchAll();
        return $intern;
        // $this->setId($id);
        // $this->setInter_activity($this->$intern[]);
        // $this->setInter_salary($this->getInter_salary());
        // $this->setIntern_description($this->getIntern_description());
        // $this->setInter_number_place($this->getInter_number_place());
        // $this->setId_company($this->getId_company());
        // $this->setId_date($this->getId_date());
        // $this->setInter_duration($this->getInter_duration());
    }
}