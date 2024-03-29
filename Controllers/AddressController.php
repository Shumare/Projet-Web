<?php
namespace Website\Controllers;

use Website\Models\AddressModel;
use Website\Models\CityModel;
use Website\Models\CompanyModel;
use Website\Models\CountryModel;

class AddressController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $addressModel= new AddressModel;
        // on va chercher toutes les annonces 
        $address= $addressModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('address/index'), ['address' =>$address]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $addressModel= new AddressModel;

        //on va chercher un people par rapport a son id 
        $address =$addressModel->find($id);

        $companyModel=new CompanyModel;
        $company =$companyModel->find($address->id_company);

        $cityModel= new CityModel;
        $city =$cityModel->find($address->id_city);


        $countryModel=new CountryModel;
        $country =$countryModel->find($address->id_country);
        //on envoie à la vue 
        $this->rendu(array('company/read','address/read', 'city/read', 'country/read'),array_merge(compact('company'),compact('address'), compact('city'), compact('country')));
    }
}