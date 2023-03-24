<?php

namespace Website\Controllers;

use Website\Models\CompanyModel;

class CompanyController extends Controller 
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $companyModel= new CompanyModel;
        // on va chercher toutes les annonces 
        $company= $companyModel->findAll();
        $company=$companyModel->pagination(1);
        //on genere la vue 
        $this->rendu(array("company/index"), ['company' =>$company]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $companyModel= new CompanyModel;
 
         //on va chercher un people par rapport a son id 
         $company =$companyModel->find($id);
         //on envoie à la vue 
         $this->rendu(array('company/read'), compact('company'));
     }

     public function create(){
        $companyModel= new CompanyModel;
        $companyModel->setComp_name($_POST['comp_name']);
        $companyModel->setComp_activity($_POST['comp_activity']);
        $companyModel->setComp_description($_POST['comp_description']);
        $companyModel->setComp_phone_number($_POST['comp_phone_number']);
        $companyModel->setComp_number_employees($_POST['comp_number_employees']);
        $companyModel->setComp_tutor_rating($_POST['comp_tutor_rating']);
        $companyModel->setComp_current_intern($_POST['comp_current_intern']);
        $companyModel->setComp_active($_POST['comp_active']);
        $company =$companyModel->create($companyModel);
        $company= $companyModel->findAll();
        $this->rendu(array('company/index'), compact('company'));
    }

    

    public function dirige(){
        $companyModel= new CompanyModel;
        $company =$companyModel->find(3);
        $this->rendu(array('company/dirige'), compact('company'));
    }
    public function delete( int $id){
        $companyModel= new CompanyModel;
        $company =$companyModel->delete($id);
        $company= $companyModel->findAll();
        $this->rendu(array('company/index'), compact('company'));
    }
    public function update()
    {
        $companyModel= new CompanyModel;
        $id=$companyModel->setId($_POST['id']);
        $companyModel->setComp_name($_POST['comp_name']);
        $companyModel->setComp_activity($_POST['comp_activity']);
        $companyModel->setComp_description($_POST['comp_description']);
        $companyModel->setComp_phone_number($_POST['comp_phone_number']);
        $companyModel->setComp_number_employees($_POST['comp_number_employees']);
        $companyModel->setComp_tutor_rating($_POST['comp_tutor_rating']);
        $companyModel->setComp_current_intern($_POST['comp_current_intern']);
        $companyModel->setComp_active($_POST['comp_active']);
        $company =$companyModel->update($_POST['id'], $companyModel);
        $company= $companyModel->findAll();
        $this->rendu(array('company/index'), compact('company'));
    }
}