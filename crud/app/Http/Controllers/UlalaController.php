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

    public function tambahfoto(){
        return view('tambahfoto');
    }

    public function insertfoto(Request $request){
        // dd($request->all());
        ulala::create($request->all());
        return redirect()->route('foto')->with('Success', 'Foto Anda Telah Di tambahkan');
    }
}