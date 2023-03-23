<?php
namespace Website\Controllers;

use Website\Models\WishlistModel;

class WishlistController extends Controller
{
    public function index()
    {
        //on instacie le model coresspondant à la table people
        $wishlistModel= new WishlistModel;
        // on va chercher toutes les annonces 
        $wishlist= $wishlistModel->findAll();
        
        //on genere la vue 
        $this->rendu(array('wishlist/index'), ['wishlist' =>$wishlist]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $wishlistModel= new WishlistModel;

        //on va chercher un people par rapport a son id 
        $wishlist =$wishlistModel->find($id);
        //on envoie à la vue 
        $this->rendu(array('wishlist/read'), compact('wishlist'));
    }
    public function create(){
        $wishlistModel= new wishlistModel;
        $wishlistModel->setId_student($_POST['id_student']);
        $wishlist =$wishlistModel->create($wishlistModel);
        $wishlist= $wishlistModel->findAll();
        $this->rendu(array('wishlist/index'), compact('wishlist'));
    }
    
    public function dirige(){
        $wishlistModel= new wishlistModel;
        $wishlist =$wishlistModel->find(3);
        $this->rendu(array('wishlist/dirige'), compact('wishlist'));
    }
    public function delete( int $id){
        $wishlistModel= new wishlistModel;
        $wishlist =$wishlistModel->delete($id);
        $wishlist= $wishlistModel->findAll();
        $this->rendu(array('wishlist/index'), compact('wishlist'));
    }
    public function update()
    {
        $wishlistModel= new wishlistModel;
        $wishlistModel->setId_student($_POST['id_student']);
        $wishlist =$wishlistModel->update($_POST['id'], $wishlistModel);
        $wishlist= $wishlistModel->findAll();
        $this->rendu(array('wishlist/index'), compact('wishlist'));
    }
}