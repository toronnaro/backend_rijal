<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    public function index(){
        $data = Foto::all();
        return view('fotogalery', compact('data'));
    }

    public function tambahfoto(){
        return view('tambahfoto');
    }
    public function insertfoto(Request $request){
        // dd($request->all());
        $data = Foto::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotogalery/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('foto');
    }

    public function tampilfoto($id){
        $data = Foto::find($id);
        return view('tampilfoto', compact('data'));
    }
    public function updatefoto(request $request, $id){
        $data = Foto::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotogalery/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('foto');
    }

    public function deletefoto($id){
        $data = Foto::find($id);
        $data->delete();
        return redirect()->route('foto');
    }
}