<?php
namespace Website\Controllers;
use Website\Models\PeopleModel;

class PeopleFilterController extends Controller
{
    public function index2()
    {
        //on instacie le model coresspondant à la table peoplefilter
        $peoplefilterModel= new PeopleModel;
        // on va chercher toutes les annonces
        if(!isset($_POST['firstname'])){
            $_POST['firstname']="";
        }
        if(!isset($_POST['lastname'])){
            $_POST['lastname']="";
        }
        if(!isset($_POST['role'])){
            $_POST['role']="";
        }
    


        $_SESSION["firstname"]=$_POST['firstname'];
        $_SESSION["lastname"]=$_POST['lastname'];
        $_SESSION["role"]=$_POST['role'];
       

        $query = "";

        if($_POST["firstname"]!=""){
            $query = $query."people_firstname='".$_POST["firstname"]."' ";
            if($_POST["lastname"] || $_POST["role"] ){
                $query = $query." AND " ;
            }
        }
        if($_POST["lastname"]!=""){
            $query = $query."people_lastname='".$_POST["lastname"]."' ";
            if($_POST["role"] ){
                $query = $query." AND " ;
            }
        }
        if($_POST["role"]!=""){
            $query = $query."role='".$_POST["role"]."' ";
            
        }
       
        //echo $query;
        $peoplefilter=$peoplefilterModel->paginationfilterpeople(0, $query);
       
        //on genere la vue 
        $this->rendu(array("peoplefilter/index"), ['peoplefilter' =>$peoplefilter]);
    }


    public function next()
    {
        //on instacie le model coresspondant à la table people
        $peoplefilterModel = new PeopleModel;
        // on va chercher toutes les annonces


        $query = "";

        if ($_SESSION["firstname"] != "") {
            $query = $query . "people_firstname='" . $_SESSION["firstname"] . "' ";
            if ($_SESSION["lastname"] || $_SESSION["role"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["lastname"] != "") {
            $query = $query . "people_lastname='" . $_SESSION["lastname"] . "' ";
            if ($_SESSION["role"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["role"] != "") {
            $query = $query . "role='" . $_SESSION["role"] . "' ";


            //$query = $query."inter_activity='".$_SESSION["Domain"]."' ";
            //echo $query;
           
            $peoplefilter = $peoplefilterModel->paginationfilterpeople(1, $query);

            //on genere la vue 
            $this->rendu(array("peoplefilter/index"), ['peoplefilter' => $peoplefilter]);
        }
    }

    public function previous()
    {

        //on instacie le model coresspondant à la table people
        $peoplefilterModel = new PeopleModel;
        // on va chercher toutes les annonces


        $query = "";

        if ($_SESSION["firstname"] != "") {
            $query = $query . "people_firstname='" . $_SESSION["firstname"] . "' ";
            if ($_SESSION["people_lastname"] || $_SESSION["role"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["lastname"] != "") {
            $query = $query . "people_lastname='" . $_SESSION["lastname"] . "' ";
            if ($_SESSION["role"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["role"] != "") {
            $query = $query . "role='" . $_SESSION["role"] . "' ";


            //$query = $query."inter_activity='".$_SESSION["Domain"]."' ";
            //echo $query;
            $peoplefilter = $peoplefilterModel->paginationfilterpeople(-1, $query);

            //echo $query;


            //on genere la vue 
            $this->rendu(array("peoplefilter/index"), ['peoplefilter' => $peoplefilter]);
        }
    }
}