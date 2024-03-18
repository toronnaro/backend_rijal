<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulala;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

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
        return redirect()->route('foto')->with('Success', 'Foto Anda Telah Di Tambahkan');
    }

    public function tampilkandatafoto($id){
        $data = ulala::find($id);
        // dd($data);

        return view('tampildatafoto', compact('data'));
    }

    public function updatedatafoto(Request $request, $id){
        $data = ulala::find($id);
        $data->update($request->all());
        return redirect()->route('foto')->with('Success', 'Foto Anda Telah Di Ubah');
    }

    public function deletedatafoto($id){
        $data = ulala::find($id);
        $data->delete();
        return redirect()->route('foto')->with('Success', 'Foto Anda Telah Di Hapus');
    }
}