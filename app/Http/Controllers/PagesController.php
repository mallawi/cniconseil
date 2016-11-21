<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        return view("accueil");
    }
    
    public function annonces() 
    {
        return view("annonces");
    }
    
    public function showAnnonce() 
    {
        return view("annonce");
    }

    public function services() 
    {
        return view("services");
    }
}
