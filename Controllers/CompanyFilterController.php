<?php

namespace Website\Controllers;

use Website\Models\CompanyModel;


class CompanyFilterController extends Controller
{
    public function index2()
    {
        //on instacie le model coresspondant à la table companyfilter
        $companyfilterModel= new CompanyModel;
        // on va chercher toutes les annonces
        if(!isset($_POST['comp_name'])){
            $_POST['comp_name']="";
        }
        if(!isset($_POST['comp_activity'])){
            $_POST['comp_activity']="";
        }
        if(!isset($_POST['city_name'])){
            $_POST['city_name']="";
        }
    


        $_SESSION["comp_name"]=$_POST['comp_name'];
        $_SESSION["comp_activity"]=$_POST['comp_activity'];
        $_SESSION["city_name"]=$_POST['city_name'];
       

        $query = "";

        if($_POST["comp_name"]!=""){
            $query = $query."comp_name='".$_POST["comp_name"]."' ";
            if($_POST["comp_activity"] || $_POST["city_name"] ){
                $query = $query." AND " ;
            }
        }
        if($_POST["comp_activity"]!=""){
            $query = $query."comp_activity='".$_POST["comp_activity"]."' ";
            if($_POST["city_name"] ){
                $query = $query." AND " ;
            }
        }
        if($_POST["city_name"]!=""){
            $query = $query."city_name='".$_POST["city_name"]."' ";
            
        }
       
        //echo $query;
        $companyfilter=$companyfilterModel->paginationfiltercompany(0, $query);
       
        //on genere la vue 
        $this->rendu(array("companyfilter/index"), ['companyfilter' =>$companyfilter]);
    }


    public function next()
    {
        //on instacie le model coresspondant à la table people
        $companyfilterModel = new CompanyModel;
        // on va chercher toutes les annonces


        $query = "";

        if ($_SESSION["comp_name"] != "") {
            $query = $query . "comp_name='" . $_SESSION["comp_name"] . "' ";
            if ($_SESSION["comp_activity"] || $_SESSION["city_name"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["comp_activity"] != "") {
            $query = $query . "comp_activity='" . $_SESSION["comp_activity"] . "' ";
            if ($_SESSION["city_name"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["city_name"] != "") {
            $query = $query . "city_name='" . $_SESSION["city_name"] . "' ";


            //$query = $query."inter_comp_activity='".$_SESSION["Domain"]."' ";
            //echo $query;
           
            $companyfilter = $companyfilterModel->paginationfiltercompany(1, $query);

            //on genere la vue 
            $this->rendu(array("companyfilter/index"), ['companyfilter' => $companyfilter]);
        }
    }

    public function previous()
    {

        //on instacie le model coresspondant à la table people
        $companyfilterModel = new CompanyModel;
        // on va chercher toutes les annonces


        $query = "";

        if ($_SESSION["comp_name"] != "") {
            $query = $query . "comp_name='" . $_SESSION["comp_name"] . "' ";
            if ($_SESSION["comp_activity"] || $_SESSION["city_name"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["comp_activity"] != "") {
            $query = $query . "comp_activity='" . $_SESSION["comp_activity"] . "' ";
            if ($_SESSION["city_name"]) {
                $query = $query . " AND ";
            }
        }
        if ($_SESSION["city_name"] != "") {
            $query = $query . "city_name='" . $_SESSION["city_name"] . "' ";


            //$query = $query."inter_comp_activity='".$_SESSION["Domain"]."' ";
            //echo $query;
            $companyfilter = $companyfilterModel->paginationfiltercompany(-1, $query);

            //echo $query;


            //on genere la vue 
            $this->rendu(array("companyfilter/index"), ['companyfilter' => $companyfilter]);
        }
    }

}