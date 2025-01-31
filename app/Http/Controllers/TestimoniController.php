<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function getTestimoni()
    {
        $testimonis = \App\Models\Testimoni::all();
        return response()->json($testimonis);
    }
}
