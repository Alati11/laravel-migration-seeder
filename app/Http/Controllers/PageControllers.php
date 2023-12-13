<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // elenco dei servizi dal DB
        $Trains = TRain::all(); // SELECT * FROM `books`
        // dd($books);

        return view('guest.index', compact('books'));
    }  
}