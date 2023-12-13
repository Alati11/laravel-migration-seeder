<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        $Trains = Train::all(); // SELECT * FROM `trains`
        dd($Trains);

        return view('home', compact('trains'));
    }  
}