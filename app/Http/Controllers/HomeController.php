<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Course;
use App\Models\Footer;
use App\Models\Galery;
use App\Models\Hero;
use App\Models\Testimoni;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $article = Article::latest()->take(3)->get();
        $testimonis = Testimoni::latest()->take(2)->get();
        $tutors = Tutor::all();
        $galleries = Galery::latest()->get();
        $footer = Footer::first()->get();
        $hero = Hero::first()->get();
        return view('home', compact('hero', 'footer', 'galleries', 'tutors', 'testimonis', 'article', 'courses'));
    }

    public function detail($id)
    {
        $footer = Footer::first()->get();
        $articleId = Crypt::decrypt($id);
        $article = Article::find($articleId)->get();
        $latest_article = Article::latest()->take(3)->get();
        return view('article', compact('article', 'footer', 'latest_article'));
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
