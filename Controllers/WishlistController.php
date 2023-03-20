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
        $this->rendu('wishlist/index', ['wishlist' =>$wishlist]);
    }
    //afficher people
    public function read(int $id )
    {
        // on instancie le model
        $wishlistModel= new WishlistModel;

        //on va chercher un people par rapport a son id 
        $wishlist =$wishlistModel->find($id);
        //on envoie à la vue 
        $this->rendu('wishlist/read', compact('wishlist'));
    }
}