<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class MapsController extends Controller
{
    public function index(){
        return view('maps');
    }
    public function proses(Request $request){
        $long=$request->long;
        $lat=$request->lati;
        $maps="https://maps.google.com/maps?q={$long},{$lat}&output=embed";
        return view('hasilmaps',['maps'=>$maps]);
    }
}
