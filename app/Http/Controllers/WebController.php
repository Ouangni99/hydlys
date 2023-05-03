<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function index()
    {
        $rooms = Room::query()->with('pictures')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('rooms'));
    }

    public function contact()
    {
        $fill = 'Contact';
        return view('contact', compact('fill'));
    }

    public function room()
    {
        $fill = 'Chambre';

        $rooms = Room::query()->with('pictures')->orderBy('created_at', 'desc')->get();


        return view('room', compact('fill', 'rooms'));
    }

    public function booking()
    {
        $fill = 'Réservation';
        return view('booking', compact('fill'));
    }

    public function about()
    {
        $fill = 'Qui sommes nous';
        return view('about', compact('fill'));
    }

    public function signup()
    {
        $fill = 'S\'inscrire';
        return view('signup', compact('fill'));
    }

    public function details(Request $request, Room $room)
    {
        $fill = 'Détails sur la chambre';
        return view('room_details', compact('fill', 'room'));
    }
}
