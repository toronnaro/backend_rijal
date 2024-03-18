<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulala;

class UlalaController extends Controller
{
    public function index(){

        $data = ulala::all();
        return view('fotogalery', compact('data'));
    }
}