<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class AktivasiController extends Controller
{
    public function index()
    {
        return view('aktivasi');
    }

    public function prosesdata(Request $request)
    {
        $this->validate($request,[
         'date' => 'required',
            'nopa' => 'required',
            'sid'  => 'required',
            'layanan' => 'required',
            'nama' => 'required',
            'alamat'  => 'required',
            'panjangKabel' => 'required',
            'koordinat' => 'required',
            'fat'  => 'required',
            'port' => 'required',
            'snont' => 'required',
            'macont'  => 'required',
            'olt'   =>'required'
    ]);

    return view('proses',['data' => $request]);
    }
}
