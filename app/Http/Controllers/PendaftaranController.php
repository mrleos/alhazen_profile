<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Footer;

class PendaftaranController extends Controller
{
    public function index(){
        $pendaftaran = Register::first();
        $footer = Footer::first()->get();
        return view('info',compact('pendaftaran','footer'));
    }
}
