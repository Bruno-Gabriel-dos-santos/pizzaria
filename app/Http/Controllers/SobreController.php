<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
   
    Public function index(){
        
        //model sobre e suas funçoes

        return view('sobre');

    }
}
