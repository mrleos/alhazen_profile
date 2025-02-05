<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Footer;
use App\Models\Galery;
use App\Models\Hero;
use App\Models\Testimoni;
use App\Models\Tutor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::latest()->take(3)->get();
        $testimonis = Testimoni::latest()->take(2)->get();
        $tutors = Tutor::all();
        $galleries = Galery::latest()->get();
        $footer = Footer::first()->get();
        $hero = Hero::first()->get();
        return view('home', compact('hero', 'footer', 'galleries', 'tutors', 'testimonis', 'article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
