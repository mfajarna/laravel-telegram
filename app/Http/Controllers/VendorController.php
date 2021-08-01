<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(){
        $vendor=Vendor::all();
        return view('addvendor',['vendor'=>$vendor]);
    }
    public function vendor(Request $req){
        $this->validate($req,[
            'nama_mitra'=>'required',
            'email_mitra'=>'required|email',
            'kontak'=>'required'
        ]);
        $vendor=Vendor::create([
            'nama_mitra'=> $req->nama_mitra,
            'email_mitra' => $req->email_mitra,
            'kontak'=> $req->kontak
        ]);
        if($vendor){
            return redirect('/vendor')->with('sukses','Data Vendor Berhasil Diinput');
        }
    }
    public function updateView($id){
        $datavendor=Vendor::where('id','=',$id)->get();
        
        return view('updateviewvendor',['datavendor'=>$datavendor]);
    }
    public function hapus($id){
        $hapus=Vendor::where('id','=',$id)->delete();
        if ($hapus){
            return redirect('/vendor')->with('sukses','Data Vendor Berhasil Dihapus');
        }
    }
    public function update(Request $req,$id){
        $updateVendor=Vendor::where('id','=',$id)->update([
            'nama_mitra'=>$req->nama_mitra,
            'email_mitra'=>$req->email_mitra,
            'kontak'=>$req->kontak
        ]);
        if ($updateVendor){
            return redirect('/vendor')->with('sukses','Data Vendor Berhasil Diupdate');
        }
    }
}
