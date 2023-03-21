<?php
namespace Website\Controllers;

use Website\Models\StudentModel;

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
         //on envoie à la vue 
         $this->rendu(array('student/read'), compact('student'));
     }
}