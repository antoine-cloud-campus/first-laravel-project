<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $prenom = "John";
        return view('welcome', ['name' => $prenom]);
    }
}
