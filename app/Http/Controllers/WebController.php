<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{


    public function index(){
        return view('index');
    }

    public function contact(){
        $fill = 'Contact';
        return view('contact',compact('fill'));
    }

    public function room(){
        $fill = 'Chambre';
        return view('room',compact('fill'));
    }

    public function booking(){
        $fill = 'Réservation';
        return view('booking',compact('fill'));
    }

    public function about(){
        $fill = 'Qui sommes nous';
        return view('about',compact('fill'));
    }
    public function signup(){
        $fill = 'S\'inscrire';
        return view('signup',compact('fill'));
    }
    public function details(){
        $fill = 'Détails sur la chambre';
        return view('room_details',compact('fill'));
    }
}
