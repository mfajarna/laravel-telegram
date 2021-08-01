<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req){
        $this->validate($req,[
            
            'email'=>'required',
            'password'=>'required',
            
        ]);
        $a=Auth::attempt($req->only('email','password'));
        $role=Auth::user()->role;
        
        if($a){
            if($role==1){
                return redirect('/data');
            }
            else{
                return redirect('/user');
            }
        }
        else{
            return redirect('/')->with('gagal','Email atau Password yang anda masukan salah, silahkan coba lagi');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function register(Request $req){
        $this->validate($req,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'ver_password'=>'required'
        ]);
        if($req->password==$req->ver_password){
            
            $user=User::create([
                'name'=>$req->name,
                'email'=> $req->email,
                'password'=>bcrypt($req->password),
                'role'=> 2
            ]);
            if($user){
                return redirect('/')->with('sukses','User Berhasil Dibuat');
            }
        }
        else{
            return redirect('/register')->with('gagal','Password Yang Anda Masukan Tidak Sama');
        }
    }
}
