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
}