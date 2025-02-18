<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class PendaftaranController extends Controller
{
    public function index(){
        $pendaftaran = Register::first();
        return view('info',compact('pendaftaran'));
    }
}
