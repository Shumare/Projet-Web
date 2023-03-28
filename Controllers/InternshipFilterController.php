<?php

namespace Website\Controllers;

use Website\Models\InternshipModel;

class internshipfilterController extends Controller 
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $internshipfilterModel= new InternshipModel;
        // on va chercher toutes les annonces
        $internshipfilter=$internshipfilterModel->pagination(0);
       
        //on genere la vue 
        $this->rendu(array("internshipfilter/index"), ['internshipfilter' =>$internshipfilter]);
    }

    public function index2()
    {
        //on instacie le model coresspondant à la table people
        $internshipfilterModel= new InternshipModel;
        // on va chercher toutes les annonces
        if(!isset($_POST['location'])){
            $_POST['location']="";
        }
        if(!isset($_POST['PublicationDate'])){
            $_POST['PublicationDate']="";
        }
        if(!isset($_POST['Domain'])){
            $_POST['Domain']="";
        }
        if(!isset($_POST['StartDate'])){
            $_POST['StartDate']="";
        }
        if(!isset($_POST['Duration'])){
            $_POST['Duration']="";
        }


        $_SESSION["location"]=$_POST['location'];
        $_SESSION["PublicationDate"]=$_POST['PublicationDate'];
        $_SESSION["Domain"]=$_POST['Domain'];
        $_SESSION["StartDate"]=$_POST['StartDate'];
        $_SESSION["Duration"]=$_POST['Duration'];

        $query = "";

        if($_POST["location"]!=""){
            $query = $query."city_name='".$_POST["location"]."' ";
            if($_POST["PublicationDate"] || $_POST["Domain"] ||$_POST["StartDate"] ||$_POST["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_POST["PublicationDate"]!=""){
            $query = $query."inter_publication_date='".$_POST["PublicationDate"]."' ";
            if($_POST["Domain"] ||$_POST["StartDate"] ||$_POST["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_POST["Domain"]!=""){
            $query = $query."inter_activity='".$_POST["Domain"]."' ";
            if($_POST["StartDate"] ||$_POST["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_POST["StartDate"]!=""){
            $query = $query."inter_start_date='".$_POST["StartDate"]."' ";
            if($_POST["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_POST["Duration"]!=""){
            $query = $query."inter_duration='".$_POST["Duration"]."' ";
        }
        //echo $query;
        $internshipfilter=$internshipfilterModel->paginationfilter(0,$query);
       
        //on genere la vue 
        $this->rendu(array("internshipfilter/index"), ['internshipfilter' =>$internshipfilter]);
    }

    public function next()
    {
        //on instacie le model coresspondant à la table people
        $internshipfilterModel= new InternshipModel;
        // on va chercher toutes les annonces
       

        $query = "";

        if($_SESSION["location"]!=""){
            $query = $query."city_name='".$_SESSION["location"]."' ";
            if($_SESSION["PublicationDate"] || $_SESSION["Domain"] ||$_SESSION["StartDate"] ||$_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["PublicationDate"]!=""){
            $query = $query."inter_publication_date='".$_SESSION["PublicationDate"]."' ";
            if($_SESSION["Domain"] ||$_SESSION["StartDate"] ||$_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["Domain"]!=""){
            $query = $query."inter_activity='".$_SESSION["Domain"]."' ";
            if($_SESSION["StartDate"] ||$_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["StartDate"]!=""){
            $query = $query."inter_start_date='".$_SESSION["StartDate"]."' ";
            if($_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["Duration"]!=""){
            $query = $query."inter_duration='".$_SESSION["Duration"]."' ";
        }
    
        //$query = $query."inter_activity='".$_SESSION["Domain"]."' ";
        //echo $query;
        $internshipfilter=$internshipfilterModel->paginationfilter(1,$query);
       
        //on genere la vue 
        $this->rendu(array("internshipfilter/index"), ['internshipfilter' =>$internshipfilter]);
   }

    public function previous()
    {
    
        //on instacie le model coresspondant à la table people
        $internshipfilterModel= new InternshipModel;
        // on va chercher toutes les annonces
      

        $query = "";

        if($_SESSION["location"]!=""){
            $query = $query."city_name='".$_SESSION["location"]."' ";
            if($_SESSION["PublicationDate"] || $_SESSION["Domain"] ||$_SESSION["StartDate"] ||$_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["PublicationDate"]!=""){
            $query = $query."inter_publication_date='".$_SESSION["PublicationDate"]."' ";
            if($_SESSION["Domain"] ||$_SESSION["StartDate"] ||$_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["Domain"]!=""){
            $query = $query."inter_activity='".$_SESSION["Domain"]."' ";
            if($_SESSION["StartDate"] ||$_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["StartDate"]!=""){
            $query = $query."inter_start_date='".$_SESSION["StartDate"]."' ";
            if($_SESSION["Duration"]){
                $query = $query." AND " ;
            }
        }
        if($_SESSION["Duration"]!=""){
            $query = $query."inter_duration='".$_SESSION["Duration"]."' ";
        }
    
        //echo $query;
        $internshipfilter=$internshipfilterModel->paginationfilter(-1,$query);
       
        //on genere la vue 
        $this->rendu(array("internshipfilter/index"), ['internshipfilter' =>$internshipfilter]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $internshipfilterModel= new InternshipModel;
 
         //on va chercher un people par rapport a son id 
         $internshipfilter =$internshipfilterModel->find($id);
         //on envoie à la vue 
         $this->rendu(array('internshipfilter/read'), compact('internshipfilter'));
     }

     public function createwish(int $id )
     {
         // on instancie le model
         $internshipfilterModel= new InternshipModel;
 
         //on va chercher un people par rapport a son id 
         $internshipfilter =$internshipfilterModel->find($id);
         //on envoie à la vue 
         $this->rendu(array('internshipfilter/read'), compact('internshipfilter'));
     }
}