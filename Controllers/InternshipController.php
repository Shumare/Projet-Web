<?php
namespace Website\Controllers;

use Website\Models\InternshipModel;
use Website\Models\Intership_DateModel;
use Website\Models\CompanyModel;

class InternshipController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $internshipModel= new InternshipModel;
        // on va chercher toutes les annonces 
        $internship= $internshipModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('internship/index'), ['internship' =>$internship]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $internshipModel= new InternshipModel;

        //on va chercher un people par rapport a son id 
        $internship =$internshipModel->find($id);

// on instancie le model
$intership_dateModel= new Intership_DateModel;

//on va chercher un people par rapport a son id 
$intership_date =$intership_dateModel->find($internship->id_date);

// on instancie le model
$companyModel= new CompanyModel;
 
//on va chercher un people par rapport a son id 
$company =$companyModel->find($internship->id_company);

        //on envoie à la vue 
        $this->rendu(array('internship/read','intership_date/read','company/read'), array_merge(compact('internship'),compact('intership_date'),compact('company')));
    }
}