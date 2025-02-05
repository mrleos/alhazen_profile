<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer; // Pastikan import model Footer
use App\Models\Article; // Import model Article jika ada

class ArticleController extends Controller
{
    public function show() {
        $footer = Footer::first()->get();
        return view('article', ['footer' => $footer]); 
    }
}