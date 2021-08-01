<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Data;
use App\Models\PPI;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PPIController extends Controller
{
    public function viewKirim()
    {
        $vendor=Vendor::all();
        return view('PPI.kirimppiview',['vendor'=>$vendor]);
    }
    public function cari(Request $request)
    {
        
        $this->validate($request,[
            'spa'=>'required'
        ]);
        $data = Data::where('p_aktivasi_node_id', '=', $request->spa)->get();
        if (!$data->isEmpty()) {
            return view('PPI.kirimppihasil', ['data' => $data,'vendor'=>$request->vendor])->with('sukses', 'sukses');
        }else{
            return redirect('/kirimppi')->with('gagal', 'Data Yang Anda Cari Tidak Ada');
        }
    }
    public function mail(Request $req){
        
        
        $detail = [
            'title' => 'Hallo',
            'body' => 'Selamat Pagi'
        ];
        $tgl=date('Y-m-d');
        $tanggal5=date('Y-m-d', time() + (60 * 60 * 24 * 5));
        $tanggal10=date('Y-m-d', time() + (60 * 60 * 24 * 10));
        $ver=PPI::where('spa','=',$req->spa)->count();
        if ($ver<=1){
            $result=PPI::where('spa','=',$req->spa)->update([
                'ppi'=>$tgl,
                'target_tes'=>$tanggal10,
                'data_lengkap'=>$tanggal5
                ]);
            if($result){
                Mail::to($req->mail)->send(new InvoiceMail($detail,$req->spa,$req->wo,$req->join,$req->laporan,$req->ijin,$req->test,$req->baps,$req->vendor));
                return redirect('/kirimppi')->with('sukses','Email Berhasil Dikirim');
            }
        }
        else{
            Mail::to($req->mail)->send(new InvoiceMail($detail,$req->spa,$req->wo,$req->join,$req->laporan,$req->ijin,$req->test,$req->baps,$req->vendor));
            return redirect('/kirimppi')->with('sukses','Email Berhasil Dikirim');
        }
        
        
    }

}
