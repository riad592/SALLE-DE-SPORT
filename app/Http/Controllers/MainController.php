<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function AccueilController()
    {
        return view('accueil');
    }
    public function CoursController()
    {
        return view('cours');
    }
    public function TarifsController()
    {
        return view('tarifs');
    }
    public function ContactController()
    {
        return view('contact');
    }
    public function MentionsLegalesController()
    {
        return view('Mentions_Legales');
    }
}
