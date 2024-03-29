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
        $internship=$internshipModel->pagination(0);
        //on genere la vue 
        $_SESSION['current_page'] = 'internships';
        $_SESSION['page_title'] = 'Internship';
        $this->rendu(array('internship/index'), ['internship' =>$internship]);
    }
    


    //afficher people
    public function read(int $id)
    {
        // on instancie le model
        $internshipModel = new InternshipModel;

        //on va chercher un people par rapport a son id 
        $internship = $internshipModel->find($id);

        // on instancie le model
        $intership_dateModel = new Intership_DateModel;

        //on va chercher un people par rapport a son id 
        $intership_date = $intership_dateModel->find($internship->id_date);

        // on instancie le model
        $companyModel = new CompanyModel;

        //on va chercher un people par rapport a son id 
        $company = $companyModel->find($internship->id_company);

        //on envoie à la vue 
        $this->rendu(array('internship/read', 'intership_date/read', 'company/read'), array_merge(compact('internship'), compact('intership_date'), compact('company')));
    }
    public function create(){
        $internshipModel= new InternshipModel;
        $idToUse = $internshipModel->getLastIdPlusOne();
        $internshipModel->setInter_activity($_POST['inter_activity']);
        $internshipModel->setInter_salary($_POST['inter_salary']);
        $internshipModel->setIntern_description($_POST['intern_description']);
        $internshipModel->setInter_number_place($_POST['inter_number_place']);
        $internshipModel->setinter_duration($_POST['intern_duration']);
        $internshipModel->setId_company($_POST['id_company']);
        $internshipModel->setId_date(1);
        $internshipModel->setinter_publication_date();
        $internshipModel->create($internshipModel);
        header('Location: /internship');
    }
    
    public function dirige(){
        $internshipModel= new InternshipModel;
        $companiymodel = new CompanyModel;
        $datemodel = new Intership_DateModel;
        //$internship = $internshipModel->getallAttributeswhitID(1);
        $internship =$internshipModel->find(3);
        $companies= $companiymodel->findAll();
        $dates= $datemodel->findAll();
        $this->rendu(array('internship/dirige'),array_merge(compact('internship'),compact('companies'),compact('dates')));
    }
    public function delete( int $id){
        $internshipModel= new InternshipModel;
        $internship =$internshipModel->delete($id);
        $internship= $internshipModel->findAll();
        $this->rendu(array('internship/index'), compact('internship'));
    }
    public function update()
    {
        $internshipModel= new InternshipModel;
        $internshipModel->setInter_activity($_POST['inter_activity']);
        $internshipModel->setInter_salary($_POST['inter_salary']);
        $internshipModel->setIntern_description($_POST['intern_description']);
        $internshipModel->setInter_number_place($_POST['inter_number_place']);
        $internshipModel->setId_company($_POST['id_company']);
        $internshipModel->setId_date($_POST['id_date']);
        $internship =$internshipModel->update($_POST['id'], $internshipModel);
        $internship= $internshipModel->findAll();
        $this->rendu(array('internship/index'), compact('internship'));
    }

    public function next()
    {
        //on instacie le model coresspondant à la table people
        $internshipModel= new internshipModel;
        // on va chercher toutes les annonces
        
        $internship=$internshipModel->pagination(1);
        
        
        //on genere la vue 
        $this->rendu(array("internship/index"), ['internship' =>$internship]);
    }

    public function previous()
    {
        //on instacie le model coresspondant à la table people
        $internshipModel= new internshipModel;
        // on va chercher toutes les annonces
        
        $internship=$internshipModel->pagination(-1);
        
        
        //on genere la vue 
        $this->rendu(array("internship/index"), ['internship' =>$internship]);
    }

   
}