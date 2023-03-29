<?php
namespace Website\Controllers;

use Website\Models\CandidateModel;

class CandidateController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $candidateModel= new CandidateModel;
        // on va chercher toutes les annonces 
        $candidate= $candidateModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('candidate/index'), ['candidate' =>$candidate]);
    }
    //afficher people
    public function read(int $id_intership )
    {
        // on instancie le model
        $candidateModel= new CandidateModel;

        //on va chercher un people par rapport a son id 
        $candidate =$candidateModel->findcandidate($id_intership);
        //on envoie à la vue 
        $this->rendu(array('candidate/read'), compact('candidate'));
    }
    public function candidature(){
        $candidateModel= new CandidateModel;
        $candidate=$candidateModel->feedback_candidature();
        $this->rendu(array('candidate/index'), ['candidate' =>$candidate]);
    }

    public function create(){
        $candidateModel= new CandidateModel;
        $candidateModel->setId_intership($_POST['id_intership']);
        $candidateModel->setId_student($_POST['id_student']);
        $candidateModel->setCand_step($_POST['cand_step']);
        $candidateModel->setCand_cv($_POST['cand_cv']);
        $candidateModel->setCand_date($_POST['cand_date']);
        $candidateModel->setCand_motivation_letter($_POST['cand_motivation_letter']);
        $candidate =$candidateModel->create($candidateModel);
        $candidate= $candidateModel->findAll();
        $this->rendu(array('candidate/index'), compact('candidate'));
    }
    
    public function dirige(){
        $candidateModel= new CandidateModel;
        $candidate =$candidateModel->findcandidate(3);
        $this->rendu(array('candidate/dirige'), compact('candidate'));
    }
    public function delete( int $id){
        $candidateModel= new CandidateModel;
        $candidate =$candidateModel->delete($id);
        $candidate= $candidateModel->findAll();
        $this->rendu(array('candidate/index'), compact('candidate'));
    }
    public function update()
    {
        $candidateModel= new CandidateModel;
        $candidateModel->setId_intership($_POST['id_intership']);
        $candidateModel->setId_student($_POST['id_student']);
        $candidateModel->setCand_step($_POST['cand_step']);
        $candidate =$candidateModel->update($_POST['id_intership'], $candidateModel);
        $candidate= $candidateModel->findAll();
        $this->rendu(array('candidate/index'), compact('candidate'));
    }
    
}