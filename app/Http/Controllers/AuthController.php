<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Alert;
use App\Peserta;

class AuthController extends Controller
{
    public function register(){
    	return view('auth.register');
    }

    public function postregister(Request $request){
    	$validatedData = $request->validate([
    		'name' => ['required', 'min:4'],
    		'no_tlp' => ['required', 'string', 'unique:users'],
    		'password' => ['required', 'min:6', 'confirmed']
    	]);

    	$id = Peserta::getId()->count();
        //dd($id);
        //foreach ($id as $key)
        //$idlama = $id;
        $idbaru = $id + 1;
        $tlp = substr($request['no_tlp'], -4);
        $waktu = date('mY'); 

        $kd_user = $waktu.$tlp.$idbaru;
        //dd($kd_user);
        $data_peserta = Peserta::create([
            "kode_user" => $kd_user,
            "name" => $request["name"],
            "no_tlp" => $request["no_tlp"],
            "role" => "user",
            "password" => Hash::make($request["password"])
        ]);
        
        //Alert::success('Berhasil!', 'Data Disimpan');
        return redirect('/')->with('success', 'Pendaftaran Berhasil');
    }
}
