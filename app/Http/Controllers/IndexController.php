<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $prenom = "John";

        return view('welcome', ['name' => $prenom, 'articles' => Article::all()]);
    }
}
