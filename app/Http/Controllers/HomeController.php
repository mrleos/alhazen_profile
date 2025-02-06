<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Footer;
use App\Models\Galery;
use App\Models\Hero;
use App\Models\Testimoni;
use App\Models\Tutor;
use App\Models\WhyAlhazen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whyAlhazen = WhyAlhazen::latest()->take(6)->get();
        $courses = Course::latest()->take(6)->get();
        $article = Article::latest()->take(3)->get();
        $testimonis = Testimoni::latest()->take(2)->get();
        $tutors = Tutor::all();
        $galleries = Galery::latest()->get();
        $footer = Footer::first()->get();
        $hero = Hero::first()->get();
        return view('home', compact('hero', 'footer', 'galleries', 'tutors', 'testimonis', 'article', 'courses', 'whyAlhazen'));
    }

    public function detail($id)
    {
        $articleId = Crypt::decrypt($id);
        $comments = Comment::where('article_id', $articleId)->where('status', 1)->get();
        $footer = Footer::first()->get();
        $article = Article::find($articleId)->get();
        $latest_article = Article::latest()->take(3)->get();
        return view('article', compact('article', 'footer', 'latest_article', 'comments'));
    }

    public function comment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'article_id' => $request->article_id,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim!');
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
