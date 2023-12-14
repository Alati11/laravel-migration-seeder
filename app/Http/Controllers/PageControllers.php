<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        $trains = train::all(); 
        dump($trains);

        return view('home', compact('trains'));
    }  
}