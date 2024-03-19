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

    // insert data
    public function tambahfoto(){
        return view('tambahfoto');
    }
    public function insertfoto(Request $request){
        // dd($request->all());
        $data = ulala::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotogalery/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('foto')->with('Success', 'Foto Anda Telah Di Tambahkan');
    }
    
    // update data
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
    
        // delete data
    public function deletedatafoto($id){
        $data = ulala::find($id);
        $data->delete();
        return redirect()->route('foto')->with('Success', 'Foto Anda Telah Di Hapus');
    }
}