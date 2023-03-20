<?php

namespace Website\Controllers;



class MainController extends Controller
{
    public function index(){
       
        $this->rendu('main/index');
    }
}