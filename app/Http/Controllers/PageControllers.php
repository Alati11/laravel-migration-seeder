<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        $Trains = TRain::all(); // SELECT * FROM `trains`
        dd($Trains);
        

        return view('guest.index', compact('books'));
    }  
}