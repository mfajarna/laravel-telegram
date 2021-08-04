<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class AktivasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aktivasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $inputForm = "Data Aktivasi Iconnet\n\n"
                    ."Tanggal: ". $request->date . "\n"
                    ."No PA: " . $request->nopa . "\n"
                    ."SID: " . $request->sid . "\n"
                    ."Layanan: " . $request->layanan . "\n"
                    ."Nama: " . $request->nama . "\n"
                    ."Alamat: " . $request->alamat . "\n"
                    ."Panjang Kabel: " . $request->panjangKabel . "\n"
                    ."Koordinat: " . $request->koordinat . "\n"
                    ."Fat: " . $request->fat . "\n"
                    ."Port: " . $request->port . "\n"
                    ."Snont: " . $request->snont . "\n"
                    ."Macont: " . $request->macont . "\n"
                    ."Olt: " . $request->olt . "\n";

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001599611180'),
            'parse_mode' => 'HTML',
            'text' => $inputForm
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatedActivity(Telegram $telegram)
    {
        $activity = $telegram::getUpdates();
        dd($activity);
    }
}
