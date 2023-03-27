<?php

namespace Website\Controllers;

use Website\Models\Intership_DateModel;

class Intership_DateController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $intership_dateModel = new Intership_DateModel;
        // on va chercher toutes les annonces 
        $intership_date = $intership_dateModel->findAll();

        //on genere la vue 
        $this->rendu(array('intership_date/index'), ['intership_date' => $intership_date]);
    }

    //afficher people
    public function read(int $id)
    {
        // on instancie le model
        $intership_dateModel = new Intership_DateModel;

        //on va chercher un people par rapport a son id 
        $intership_date = $intership_dateModel->find($id);
        //on envoie à la vue 
        $this->rendu(array('intership_date/read'), compact('intership_date'));
    }



    public function create()
    {
        $intership_dateModel = new Intership_DateModel;
        $intership_dateModel->setDates($_POST['Dates']);
        $intershiph_date = $intership_dateModel->create($intership_dateModel);
        $intershiph_date = $intership_dateModel->findAll();
        $this->rendu(array('intershiph_date/index'), compact('intershiph_date'));
    }

    public function dirige()
    {
        $intership_dateModel = new Intership_DateModel;
        $intershiph_date = $intership_dateModel->find(3);
        $this->rendu(array('intershiph_date/dirige'), compact('intershiph_date'));
    }
    public function delete(int $id)
    {
        $intership_dateModel = new Intership_DateModel;
        $intershiph_date = $intership_dateModel->delete($id);
        $intershiph_date = $intership_dateModel->findAll();
        $this->rendu(array('intershiph_date/index'), compact('intershiph_date'));
    }
    public function update()
    {
        $intership_dateModel = new Intership_DateModel;
        $intership_dateModel->setDates($_POST['Dates']);
        $intershiph_date = $intership_dateModel->update($_POST['id'], $intership_dateModel);
        $intershiph_date = $intership_dateModel->findAll();
        $this->rendu(array('intershiph_date/index'), compact('intershiph_date'));
    }
}
