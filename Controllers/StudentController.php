<?php
namespace Website\Controllers;

use Website\Models\StudentModel;
use Website\Models\PeopleModel;
class StudentController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $studentModel= new StudentModel;
        // on va chercher toutes les annonces 
        $student= $studentModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('student/index'), ['student' =>$student]);
    }

     //afficher people
     public function read(int $id )
     {
         // on instancie le model
         $studentModel= new StudentModel;
 
         //on va chercher un people par rapport a son id 
         $student =$studentModel->find($id);

         // on instancie le model
        $peopleModel= new PeopleModel;

        //on va chercher un people par rapport a son id 
        $people =$peopleModel->find($student->id_people);

         //on envoie à la vue 
         $this->rendu(array('student/read','people/read'), array_merge(compact('student'),compact('people')));
     }
     public function create(){
        $studentModel= new StudentModel;
        $studentModel->setId_promotion($_POST['id_promotion']);
        $studentModel->setId_people($_POST['id_people']);
        $student =$studentModel->create($studentModel);
        $student= $studentModel->findAll();
        $this->rendu(array('student/index'), compact('student'));
    }
    
    public function dirige(){
        $studentModel= new StudentModel;
        $student =$studentModel->find(3);
        $this->rendu(array('student/dirige'), compact('student'));
    }
    public function delete( int $id){
        $studentModel= new StudentModel;
        $student =$studentModel->delete($id);
        $student= $studentModel->findAll();
        $this->rendu(array('student/index'), compact('student'));
    }
    public function update()
    {
        $studentModel= new StudentModel;
        $studentModel->setId_promotion($_POST['id_promotion']);
        $studentModel->setId_people($_POST['id_people']);
        $student =$studentModel->update($_POST['id'], $studentModel);
        $student= $studentModel->findAll();
        $this->rendu(array('student/index'), compact('student'));
    }
}