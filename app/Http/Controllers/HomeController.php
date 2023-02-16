<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home() 
    {
        $data = Http::get('http://localhost:3000/api/visitors/chart')->body();

        return view('welcome', compact('data'));
    }
}
